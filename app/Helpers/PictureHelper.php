<?php

namespace App\Helpers;

class PictureHelper
{

    public static function nom($file)
    {
        $any=date("y"); if(strlen($any)==1){$any="0".$any;}
        $mes=date("m"); if(strlen($mes)==1){$mes="0".$mes;}
        $dia=date("d"); if(strlen($dia)==1){$dia="0".$dia;}
        $hor=date("H"); if(strlen($hor)==1){$hor="0".$hor;}
        $min=date("i"); if(strlen($min)==1){$min="0".$min;}
        $seg=date("s"); if(strlen($seg)==1){$seg="0".$seg;}

        $rand = rand(1000, 9999);
        $ext       = $file->extension();
        return 'img' . '_' . $rand . '_' . $any . $mes . $dia . '_' . $hor . $min . $seg . '.' . $ext;
    }
}
