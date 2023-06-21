<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Coordinate;
use App\Libraries\CoordinateLibrary;

class CoordinatePhotos extends Component
{
    public $coordinate;

    protected $listeners = ['showCoordinatePhotos', 'setNewCoordinate'];

    public function showCoordinatePhotos($id)
    {
        $this->coordinate = Coordinate::find($id);
    }

    public function setNewCoordinate($coordinate)
    {
        CoordinateLibrary::create($coordinate);
        // $this->coordinate = Coordinate::find($id);
    }

    public function render()
    {
        return view('livewire.coordinate-photos', ['coordinate' => $this->coordinate]);
    }
}
