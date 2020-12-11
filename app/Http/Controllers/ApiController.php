<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function get() {
        echo "test";
        //$string = file_get_contents(asset('openapi/storage/1.json'));   
        //$json_file = json_decode($string, true);
        //echo $json_file;
    }
}
