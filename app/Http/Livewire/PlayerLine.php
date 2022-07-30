<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PlayerLine extends Component
{

    public $player;
    public $champion; 
    public $color;
    public $user = null;
    public $goodgame =true;
    public $comment ="";
    public $gameId;
    public $userId;
    public $isOn = false;

    protected $listeners = ['save' => 'submit'];

    public function mount(){
        $this->user = auth()->user();
    }

    public function submit()
    {
        if($this->isOn){
            DB::table('feedback')->insert(
                ['pseudo' => Str::lower($this->player['summonerName']), 
                'comments' => $this->comment,
                'status' => $this->goodgame, 
                'result' => $this->getResult(), 
                'player_id' => $this->player['puuid'],
                'game_id' => $this->gameId,
                'user_id' => $this->user->id,
                'champion' => $this->player['championName'],
                'sum1' => $this->player['summoner1Id'],
                'sum2' => $this->player['summoner2Id'],
                'role' => $this->player['individualPosition'],
                'kills' => $this->player['kills'],
                'deaths' => $this->player['deaths'],
                'assists' => $this->player['assists']]
            );
        }
    }

    public function getResult(){
        if($this->player['win'] == 1){
            return true;
        }else{
            return false;
        }
    }

    public function render()
    {
        return view('livewire.player-line');
    }
}
