<?php

namespace App\Livewire;

use App\Models\Certificado;
use Livewire\Component;

class Certificates extends Component
{
    public $certificadoId;

    public function mount($certificadoId)
    {
        $this->certificadoId = $certificadoId;
    }

    public function render()
    {
        $certificado = Certificado::find($this->certificadoId);

        return view('livewire.certificates', ['certificado' => $certificado]);
    }
}
