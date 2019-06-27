<?php

namespace App\Http\Controllers\Dygraph;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Like;
use App\Foto;

class LikeController extends Controller
{
    public function index(){
        $d['likes'] = Like::orderBy('id', 'DESC')->get();
        return view('app.likes.index', $d);
    }
}
