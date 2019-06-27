<?php

namespace App\Http\Controllers\DygraphMobile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Fotografer;
use App\Category;
use App\Foto;

use App\Like;
use DB;

class APIController extends Controller
{
    public function mobileHome(Request $r){
        $d['id_user'] = $r->id_user;
        $d['fotografers'] = Fotografer::orderBy('nama_lengkap', 'ASC')->get();
        $d['fotos'] = Foto::orderBy('id', 'DESC')->get();
        $d['likes'] = Like::orderBy('id', 'DESC')->get();

        return view('_____API.mobile.home', $d);
    }
    public function mobileCategory(){
        $d['categories'] = Category::orderBy('category', 'ASC')->get();
        
        return view('_____API.mobile.category', $d);
    }
    public function mobileFotografer(){
        $d['fotografers'] = Fotografer::orderBy('id', 'DESC')->get();
        $d['fotos'] = Foto::orderBy('id', 'DESC')->get();
        return view('_____API.mobile.fotografer', $d);
    }
    public function likeFoto(Request $r){
        $id_foto = $r->id_foto;
        $id_user = $r->id_user;
        $foto = Like::where('id_foto', $id_foto)->first();
        if (empty($foto)) {
            $db = new Like;
            $db->id_foto = $id_foto;
            $db->id_user = $id_user;
            $db->like_count = 1;
            $db->save();
            echo 'like new';
        }
        else{
            $foto_check_user = explode(", ",$foto->id_user);
                if(in_array($id_user, $foto_check_user)){
                    echo "sudah like";
                }
                else{
                    $db = Like::where('id_foto', $id_foto)->first();
                    $db->id_user = $db->id_user.", ".$id_user;
                    $db->like_count = $db->like_count + 1;
                    $db->save();
                    echo 'like plus';
                }
        }
    }
}
