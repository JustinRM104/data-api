<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getData() {
        return "Getting data";
    }
    public function postData() {
        return "Posting data";
    }
}
