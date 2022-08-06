<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class GameComponent extends Component
{
    public $gameId ="";
    public $team2NewDonne;
    public $team1NewDonne;

    public $team1Belote= false;
    public $team2Belote= false;

    public $team2prise =false;
    public $team1prise =true;

    public $team1capot =false;
    public $team2capot =false;

    public $team1sum = 0;
    public $team2sum = 0;

    public $totalPoint = 162;

    public $game = null;

    public $donnes = null;

    public function load(){
        $this->donnes =  DB::table('donne')
                                ->where('game_id',$this->gameId)
                                ->get();
        $this->team1sum = 0;
        $this->team2sum = 0;
        foreach ($this->donnes as $donne){
            $this->team1sum = $this->team1sum + $donne->equipe1;
            $this->team2sum = $this->team2sum + $donne->equipe2;
        }
    }

    public function resetValue(){
        $this->team2NewDonne = null;
        $this->team1NewDonne = null;

        $this->team1Belote= false;
        $this->team2Belote= false;

        $this->team2prise =false;
        $this->team1prise =true;

        $this->team1capot =false;
        $this->team2capot =false;

        $this->team1sum = 0;
        $this->team2sum = 0;

        $this->totalPoint = 162;
    }

    public function newGame(){
        return redirect()->route('index');
    }

    public function deleteLast(){
        DB::table('donne')->where('game_id',$this->gameId)->orderBy('id', 'desc')->take(1)->delete();
    }

    public function nouvelleDonne(){

        if($this->team1capot || $this->team2capot){
            DB::table('donne')->insert(
                ['equipe1' => $this->team1NewDonne, 
                'equipe2' => $this->team2NewDonne,
                'game_id' => $this->gameId,
                '10der' => false,
                'beloteEtRe' => $this->team1Belote,
                'capot' => $this->team1capot,
                'prise' => 'team1']
            );
            $this->resetValue();
            $this->load();
            return ;
        }

        if($this->team1prise){
            if($this->checkIfgoodWin($this->team1NewDonne,$this->team1Belote,$this->team2Belote)){
                if($this->team1Belote){
                    $this->team1NewDonne = (int)$this->team1NewDonne + 20;
                }
                if($this->team2Belote){
                    $this->team2NewDonne = (int)$this->team2NewDonne + 20;
                }
                // On peut ajouter le score dans la DB, on a vérifié si elle est faite et on a calculer le score
                DB::table('donne')->insert(
                    ['equipe1' => $this->team1NewDonne, 
                    'equipe2' => $this->team2NewDonne,
                    'game_id' => $this->gameId,
                    '10der' => false,
                    'beloteEtRe' => $this->team1Belote,
                    'capot' => $this->team1capot,
                    'prise' => 'team1']
                );
            }
            else{
                $this->team1NewDonne = 0;
                if($this->team1Belote){
                    $this->team1NewDonne = 20;
                }
                DB::table('donne')->insert(
                    ['equipe1' => $this->team1NewDonne, 
                    'equipe2' => 162,
                    'game_id' => $this->gameId,
                    '10der' => false,
                    'beloteEtRe' => $this->team1Belote,
                    'capot' => $this->team1capot,
                    'prise' => 'team1']
                // Ici on ajoute dans la DB la chute donc 162 et 0;
                );
            }
                
        }else{
            if($this->checkIfgoodWin($this->team2NewDonne,$this->team2Belote,$this->team1Belote)){
                if($this->team2Belote){
                    $this->team2NewDonne = (int)$this->team2NewDonne + 20;
                }
                if($this->team1Belote){
                    $this->team1NewDonne = (int)$this->team1NewDonne + 20;
                }
                DB::table('donne')->insert(
                    ['equipe1' => $this->team1NewDonne, 
                    'equipe2' => $this->team2NewDonne,
                    'game_id' => $this->gameId,
                    '10der' => false,
                    'beloteEtRe' => $this->team2Belote,
                    'capot' => $this->team2capot,
                    'prise' => 'team2']
                );
            }
            else{
                // Ici on ajoute dans la DB la chute donc 162 et 0;
                // Sauf belote et re on les ajoute quand même : ex : 162 et quand même 20
                $this->team2NewDonne = 0;
                if($this->team2Belote){
                    $this->team2NewDonne = 20;
                }
                DB::table('donne')->insert(
                    ['equipe1' => 162, 
                    'equipe2' => $this->team2NewDonne,
                    'game_id' => $this->gameId,
                    '10der' => false,
                    'beloteEtRe' => $this->team2Belote,
                    'capot' => $this->team2capot,
                    'prise' => 'team2']
                // Ici on ajoute dans la DB la chute donc 162 et 0;
                );
            }
        }
        $this->resetValue();
        $this->load();
    }

    public function checkIfgoodWin($score,$beloteEtRe,$beloteEtReOtherTeam){
        if($beloteEtRe){
            $score = $score + 20;
            $minimumPoint = ((int)$this->totalPoint + 20) / 2;
            if($score > $minimumPoint){
                return true;
            }
        }elseif($beloteEtReOtherTeam){ // dans le cas ou la team enenmy a fait belote et re
            $minimumPoint = ((int)$this->totalPoint + 20) / 2;
            if($score > $minimumPoint){
                return true;
            }
        }else{
            $minimumPoint = (int)$this->totalPoint / 2;
            if($score > $minimumPoint){
                return true;
            } 
        }
        return false;
    }

    public function calcul($value){
        if($value == 1){
            $this->team2NewDonne = $this->totalPoint - (int)$this->team1NewDonne;
        }else{
            $this->team1NewDonne = $this->totalPoint - (int)$this->team2NewDonne;
        }
    }

    public function prise($value){
        if($value == 1){
            if($this->team2prise == true){
                $this->team2prise =false;
            }
        }else{
            if($this->team1prise == true){
                $this->team1prise =false;
            }
        }
    }

    public function capot($value){
        if($value == 1){
            if($this->team2capot == true){
                $this->team2capot =false;
            }
            $this->team1NewDonne = 250;
            $this->team2NewDonne = 0;
        }else{
            if($this->team1capot == true){
                $this->team1capot =false;
            }
            $this->team1NewDonne = 0;
            $this->team2NewDonne = 250;
        }
    }

    public function beloteetre($value){
        if($value == 1){
            if($this->team2Belote == true){
                $this->team2Belote =false;
            }
        }else{
            if($this->team1Belote == true){
                $this->team1Belote =false;
            }
        }
    }

    public function render()
    {
        $this->load();
        $this->game =  DB::table('game')
                                ->where('id',$this->gameId)
                                ->get();
        return view('livewire.game-component');
    }
}
