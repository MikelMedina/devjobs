<?php

namespace App\Livewire;

use App\Models\Vacante;
use Livewire\Component;


class MostrarVacantes extends Component
{

    protected $listeners = ['eliminarVacante'];
 
    // public function prueba($vacante_id)
    // {
    //     dd($vacante_id);
    // }

    public function eliminarVacante(Vacante $vacante)
    {
        $vacante->delete();
    }

    public function render()
    {
        $vacantes = Vacante::where('user_id', auth()->user()->id)->paginate(10);
        return view('livewire.mostrar-vacantes', [
            'vacantes' => $vacantes
        ]);
    }
}
