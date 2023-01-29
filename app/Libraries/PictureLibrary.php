<?php

namespace App\Libraries;

use App\Models\Picture;
use Illuminate\Support\Facades\Log;
use Intervention\Image\Facades\Image;

class PictureLibrary
{
    static function uploadNewPhotography($file, $folderPath, $fileName)
    {
        $fileMimeType = $file->getMimeType();

        if(!in_array($fileMimeType, config('constants.FILE_MIME_TYPE_ALLOWED'))){
            return abort(500, 'Invalid file type selected. <br /> Allowed file types are (WEBP, JPG, PNG)');;
        }

        $picture = $folderPath.'/'.$fileName;
        $uploadedFile = self::uploadFile($file, $folderPath, $fileName);

        if($uploadedFile)
        {
            Image::make($picture)->save($picture, 60);
        }

        return $picture;
    }

    static function uploadFile($file, $path, $fileName)
    {
        try {

            if (!is_dir($path))
            {
                mkdir($path, 0777, TRUE);
            }

            $file->move($path, $fileName);

            return $fileName;

        } catch (\Exception $e) {
            Log::error($e);
        }
    }

    static function insert($picture, $coordinateId, $userId, $name, $date)
    {
        return Picture::create([
            'picture' => $picture,
            'id_coordinate' => $coordinateId,
            'id_user' => $userId,
            'name' => $name,
            'date' => $date,
        ]);
    }
}
