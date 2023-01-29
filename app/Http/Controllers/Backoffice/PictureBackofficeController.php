<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Requests\PictureUploadRequest;

class PictureBackofficeController extends BackofficeController
{
    public function upload(PictureUploadRequest $request)
    {
        dd($request);
    }
}
