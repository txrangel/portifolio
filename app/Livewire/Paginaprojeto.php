<?php

namespace App\Livewire;

use Livewire\Component;
use Parsedown;

class Paginaprojeto extends Component
{
    public function render()
    {
        $parsedown = new Parsedown();
        $seuConteudoMarkdown = "# Título\n\nEste é um parágrafo **Markdown**.\n\n- Lista 1\n- Lista 2";
        return view('livewire.paginaprojeto',[
            'seuConteudoMarkdown' => $parsedown->text($seuConteudoMarkdown),
        ]
    );
    }
}
