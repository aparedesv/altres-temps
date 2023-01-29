<?php

namespace App\Http\Controllers\Backoffice;

use App\Libraries\PictureLibrary;
use App\Libraries\CoordinateLibrary;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\PictureUploadRequest;
use App\Http\Controllers\Backoffice\BackofficeController;

class PictureBackofficeController extends BackofficeController
{

    public function upload(PictureUploadRequest $request)
    {
        if ($request->file('picture') != null)
        {
            $newCoordinate = CoordinateLibrary::insert($request);
            $userFolder = $this->getUserFolder(Auth::id());

            $file = $request->file('picture');
            $folderPath = base_path().Storage::url('app/public/img/'.$userFolder);
            $fileName = $this->imageName($file);
            $newPicture = PictureLibrary::uploadNewPhotography($file, $folderPath, $fileName);

            PictureLibrary::insert($newPicture, $newCoordinate->id, Auth::id(), $request->input('name'), $request->input('date'));
        }

        return redirect()->route('backoffice.home');
    }
}
