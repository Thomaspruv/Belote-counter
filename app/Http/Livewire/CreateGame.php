<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;


class CreateGame extends Component
{

    public $player1 = "";
    public $player2 = "";
    public $player3 = "";
    public $player4 = "";
    public $points = "";


    public function create(){
        $id = DB::table('game')->insertGetId(
            ['player1' => strtolower($this->player1), 
            'player2' => strtolower($this->player2),
            'player3' => strtolower($this->player3),
            'player4' => strtolower($this->player4),
            'points' => $this->points,
            'eq1_points' => 0,
            'eq2_points' => 0]
        );

        return redirect()->route('game',['id' => $id]);
    }

    public function render()
    {
        return view('livewire.create-game');
    }
}
