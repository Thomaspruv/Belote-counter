<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Models\Feedback;
use Illuminate\Support\Facades\Log;


class ListComments extends Component
{

    public $user = null;
    public $comments = null;

    public $searchValue= '';

    public function mount()
    {
        
        $this->user = auth()->user();
        $this->comments =  DB::table('feedback')->where('user_id',$this->user->id)->get();

        //dd($this->comments);
    }

    public function search()
    {
        $this->comments =  DB::table('feedback')
                                ->where('user_id',$this->user->id)
                                ->where('pseudo','like','%'.strtolower($this->searchValue).'%' )
                                ->get();
        //og::debug($this->searchValue);
    }

    public function render()
    {
        return view('livewire.list-comments',[
            'comments' => $this->comments,
        ]);
    }
}
