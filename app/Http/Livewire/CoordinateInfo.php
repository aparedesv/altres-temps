<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Coordinate;

class CoordinateInfo extends Component
{
    public $coordinate;

    protected $listeners = ['showCoordinateInfo'];

    public function showCoordinateInfo($id)
    {
        $this->coordinate = Coordinate::find($id);
    }

    public function render()
    {
        return view('livewire.coordinate-info', ['coordinate' => $this->coordinate]);
    }
}
