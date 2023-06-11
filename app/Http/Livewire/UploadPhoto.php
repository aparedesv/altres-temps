<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Helpers\PictureHelper;
use App\Libraries\PictureLibrary;
use Illuminate\Support\Facades\Auth;

class UploadPhoto extends Component
{

    use WithFileUploads;
    public $photo;
    public $coordinateId;
    public $name;
    public $date;

    public function insert()
    {
        $this->validate([

            'photo' => 'image|max:1024',
            'name' => 'required|string|min:2|max:255',
            'date' => 'required|date',
        ]);

        $nom = PictureHelper::nom($this->photo);
        $this->photo->storeAs('/public/coordinates/'.$this->coordinateId.'/pictures', $nom);

        PictureLibrary::insert(
            '/storage/coordinates/'.$this->coordinateId.'/pictures/'.$nom,
            $this->coordinateId,
            Auth::id(),
            $this->name,
            $this->date
        );

        return redirect()->route('home');
    }
}
