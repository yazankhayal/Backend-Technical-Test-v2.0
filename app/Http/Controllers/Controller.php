<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function excel($musicas){
        $json = json_encode($musicas);
        $json = preg_replace('/["]/', '' ,$json);
        $json = str_replace(':',':"', $json);
        $json = str_replace(',','",',$json);
        $json = str_replace('}]','"}]',$json);
        return $json;
    }

}
