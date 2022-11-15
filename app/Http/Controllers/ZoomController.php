<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \MacsiDigital\Zoom\Facades\Zoom;

class ZoomController extends Controller
{
    public function index(){
        $users = Zoom::user()->find('aliefbagas3@gmail.com');

        return response()->json($users);
    }
}
