<?php

namespace App\Http\Controllers\Backoffice;

use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class BackofficeController extends Controller
{
    // controlador pare del backoffice
    public function imageName($imageFile, $name="")
    {
        $any=date("Y"); if(strlen($any)==1){$any="0".$any;}
        $mes=date("m"); if(strlen($mes)==1){$mes="0".$mes;}
        $dia=date("d"); if(strlen($dia)==1){$dia="0".$dia;}
        $hor=date("H"); if(strlen($hor)==1){$hor="0".$hor;}
        $min=date("i"); if(strlen($min)==1){$min="0".$min;}
        $seg=date("s"); if(strlen($seg)==1){$seg="0".$seg;}

        $rand = rand(1000, 9999);

        $ext = $imageFile->extension();

        $fname = (!empty($name))?$name:'img';

        return $fname . '_' . $any . $mes . $dia . '_' . $hor . $min . $seg . '_' . $rand . '.' . $ext;
    }

    public function getUserFolder($userId)
    {
        return str_pad($userId, 20, '0', STR_PAD_LEFT);
    }
}
