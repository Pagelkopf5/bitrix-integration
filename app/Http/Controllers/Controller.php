<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Conn\Br24Conn;

abstract class Controller
{
    public function verify(Request $request)
    {
        return response('', 302)->header('Location', env('FRONTEND_URL'));
    }
}
