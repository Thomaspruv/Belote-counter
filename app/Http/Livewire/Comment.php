<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Feedback;

class Comment extends Component
{

    public $comment;


    public function mount(Feedback $comment)
    {
        $this->comment = $comment;

    }

    public function render()
    {
        return view('livewire.comment');
    }
}
