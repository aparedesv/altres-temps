<?php

namespace App\Libraries;

use App\Models\Picture;

class PictureLibrary
{

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
