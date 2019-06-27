<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Fotografer;
use App\Category;
use App\Foto;
use App\UserApp;

use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $d['fotografers'] = Fotografer::all()->count();
        $d['users'] = UserApp::all()->count();
        $d['categories'] = Category::all()->count();
        $d['fotos'] = Foto::all()->count();

        $d['statistics'] = DB::Select('SELECT MONTH(created_at) as r_month, COUNT(MONTH(created_at)) as r_count FROM `fotos` GROUP BY MONTH(created_at) ORDER BY MONTH(created_at) LIMIT 7');


        $rand = str_pad(dechex(rand(0x000000, 0xFFFFFF)), 6, 0, STR_PAD_LEFT);
        $d['rand'] = "#" . $rand;

        $d['d_categories'] = Category::orderBy('id', 'DESC')->limit('7')->get();
        $d['d_fotos'] = Foto::orderBy('id', 'DESC')->get();
        return view('home', $d);
    }
}
