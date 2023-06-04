<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Coordinate;

class CoordinatePhotos extends Component
{
    public $coordinate;

    protected $listeners = ['showCoordinatePhotos'];

    public function showCoordinatePhotos($id)
    {
        $this->coordinate = Coordinate::find($id);
    }

    public function render()
    {
        return view('livewire.coordinate-photos', ['coordinate' => $this->coordinate]);
    }
}
