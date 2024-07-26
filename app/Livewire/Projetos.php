<?php

namespace App\Livewire;

use App\Models\Projeto;
use Livewire\Component;

class Projetos extends Component
{
    public function render()
    {
        $projetos = Projeto::where('funcionario_id',3)->get(['id','name','resume']);
        //dd($projetos);
        return view('livewire.projetos',['projetos'=> $projetos]);
    }
}
