<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class VideosController extends Controller
{
    public function index(){
        return Video::all();
    }
}
