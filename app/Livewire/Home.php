<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use App\Models\Certificado;
use App\Models\Funcionario;

class Home extends Component
{
    public function render()
    {
        $certificadoId = 1;
        $funcionarios = Funcionario::first()->get(['id','name','github','linkedin','cv_path', 'photo_path']);
        return view('livewire.home', ['certificadoId' => $certificadoId,'funcionarios' => $funcionarios]);
    }
}
