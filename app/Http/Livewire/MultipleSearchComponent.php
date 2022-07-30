<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;


class MultipleSearchComponent extends Component
{

    public $searchMultipleValue = null;
    public $comments = array();

    public function render()
    {
        return view('livewire.multiple-search-component');
    }

    public function search()
    {
        $lignes = explode("\n", $this->searchMultipleValue);
        $pseudos = array();
        foreach ($lignes as $key => $ligne){
            $sliceLigne = Str::before($ligne, ' joined');
            array_push($pseudos,strtolower($sliceLigne));
        }
        $this->comments = DB::table('feedback')->where('pseudo',$pseudos)->get();
    }
}
