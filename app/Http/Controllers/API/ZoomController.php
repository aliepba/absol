<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \MacsiDigital\Zoom\Facades\Zoom;

class ZoomController extends Controller
{
    public function index(){
        $users = Zoom::user()->where('status', 'active')->get();

        return response()->json($users);
    }
}
