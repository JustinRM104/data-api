<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function get($user_secret_code, $db_code) {
        return "Getting data  user_secret: $user_secret_code db_code: $db_code";
    }
    public function post($user_secret_code, $db_code) {
        return "Posting data";
    }
}
