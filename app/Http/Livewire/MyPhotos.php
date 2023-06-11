<?php

namespace App\Http\Livewire;

use App\Models\Picture;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class MyPhotos extends Component
{
    public $pictures;
    public $picture;
    public $view = 'livewire.my-photos';
    public $photo;
    public $name;
    public $date;

    protected $listeners = ['deletePhoto', 'editPhoto'];

    public function deletePhoto(Picture $picture)
    {
        $picture->delete();
    }

    public function editPhoto(Picture $picture)
    {
        Session::put('screen', 'picture');
        $this->picture = $picture;
        $this->photo = $this->picture->photo;
        $this->name = $this->picture->name;
        $this->date = $this->picture->date;
        $this->view = 'livewire.my-photo';
    }

    public function update()
    {
        $this->validate([

            'name' => 'required|string|min:2|max:255',
            'date' => 'required|date',
        ]);

        $picture = $this->picture;
        $picture->name = $this->name;
        $picture->date = $this->date;
        $picture->save();

        return redirect()->route('home');
    }

    public function render()
    {
        $this->pictures = Auth::user()->pictures;
        return view($this->view, [
            'pictures' => $this->pictures,
            'picture' => $this->picture
        ]);
    }
}
