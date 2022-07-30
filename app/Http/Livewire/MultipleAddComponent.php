<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;
use Illuminate\Support\Arr;

class MultipleAddComponent extends Component
{

    public $user =null;

    public $players = array();
    protected $match =null;

    public $red ='red';
    public $blue ='blue';

    public $key ='RGAPI-f2c3187b-a7ac-4686-a3f0-4d8b5bb14823';

    public function mount(){
        $this->load();
    }

    public function save(){
        $this->emit('save');
        $this->load();
       // return redirect()->route('dashboard');
    }

    public function load(){

        $this->user = auth()->user();

        //Chargement des matchs et récupération du dernier de la liste
        $response = Http::get('https://europe.api.riotgames.com/lol/match/v5/matches/by-puuid/'.$this->user->puuid.'/ids?start=0&count=20&api_key='.$this->key);
        $matches =  json_decode($response->body());
        $lastMatch = Arr::first($matches);

        //dd($lastMatch);
        //Récupération des infos de la partie
        $response = Http::get('https://europe.api.riotgames.com/lol/match/v5/matches/'.$lastMatch.'?api_key='.$this->key);
        $this->match = json_decode($response->body());

        $this->players= $this->match->info->participants;
        //dd($this->match->info->participants);

    }

    public function render()
    {
        return view('livewire.multiple-add-component');
    }
}
