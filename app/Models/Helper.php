<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Helper extends Model
{
    public static function array_contains($array, $needle) {
        foreach ($array as $item) {

            if (str_contains($item, $needle)) {

                return true;
            }
        }
        return false;
    }

    public static function urlIsImage($url){

        if(strpos($_SERVER['REQUEST_URI'], $url)) {
            $finfo = finfo_open(FILEINFO_MIME_TYPE); // Abre la información de tipo MIME
            $tipo = finfo_file($finfo, $url);
            finfo_close($finfo);

            if (strpos($tipo, 'image/') === 0) {
                return true;
            }
        }

        return false;
    }
}
