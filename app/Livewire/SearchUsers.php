<?php

namespace App\Livewire;

use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Testing\WithoutEvents;
use Livewire\Component;

class SearchUsers extends Component
{
 
    public $users=[];
    public $search="Inserisci la tua ricerca qui";
    public function render()
    {
        if($this->search=="Inserisci la tua ricerca qui"){
            $this->users = User::all();
        }else{
            $this->users = User::where('name','like','%'.$this->search.'%')->get();
        }
        
        return view('livewire.search-users');
    }
}
