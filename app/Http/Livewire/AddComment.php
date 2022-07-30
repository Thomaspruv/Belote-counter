<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class AddComment extends Component
{

    public $pseudo = null;
    public $comment = null;
    public $result = true;
    public $playerId = 668;
    public $status = false;
    public $game_id = "59";
    public $user_id = 1;

    public function mount()
    {
        $this->user = auth()->user();
    }

    public function add(){
        DB::table('feedback')->insert(
            ['pseudo' => Str::lower($this->pseudo), 
            'comments' => $this->comment,
            'status' => $this->status, 
            'result' => $this->result , 
            'player_id' => $this->playerId,
            'game_id' => $this->game_id,
            'user_id' => $this->user->id]
        );

        //reset();
        return redirect()->route('dashboard');
    }

    public function render()
    {
        return view('livewire.add-comment');
    }

    

}
