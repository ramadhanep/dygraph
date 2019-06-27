<?php

namespace App\Http\Controllers\Dygraph;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Image;

use App\Fotografer;

class FotograferController extends Controller
{
    public function index(){
        $d['fotografers'] = Fotografer::orderBy('id', 'DESC')->get();
        return view('app.fotografer.index', $d);
    }
    public function add(){
        return view('app.fotografer.add');
    }
    public function save(Request $r){
        $fotografer = new Fotografer;
        $fotografer->nama_lengkap = $r->input('nama_lengkap');

        $profile = $r->file('profile');
        if(!empty($profile)){
            $rand = bin2hex(openssl_random_pseudo_bytes(100)).".".$profile->extension();
            $rand_md5 = md5($rand).".".$profile->extension();
            $fotografer->profile = $rand_md5;

            $profile_resize = Image::make($profile->getRealPath());              
            $profile_resize->resize(150, 150, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('UploadedFile/fotografer_profile/' .$rand_md5));
        }

        $fotografer->save();
        return redirect()->route('fotograferIndex')->with('alertTambah', $r->input('nama_lengkap'));
    }
    public function edit($id){
        $d['fotografers'] = Fotografer::find($id);
        return view('app.fotografer.edit', $d);
    }
    public function prosesEdit(Request $r, $id){
        $fotografer = Fotografer::find($id);
        $fotografer->nama_lengkap = $r->input('nama_lengkap');

        $profile = $r->file('profile');
        if(!empty($profile)){
            $rand = bin2hex(openssl_random_pseudo_bytes(100)).".".$profile->extension();
            $rand_md5 = md5($rand).".".$profile->extension();
            $fotografer->profile = $rand_md5;

            $profile_resize = Image::make($profile->getRealPath());              
            $profile_resize->resize(150, 150, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('UploadedFile/fotografer_profile/' .$rand_md5));
        }

        $fotografer->save();
        return redirect()->route('fotograferIndex')->with('alertEdit', $r->input('nama_lengkap'));
    }
    public function delete($id){
        $fotografer = Fotografer::find($id);
        $data = $fotografer->category;
        $fotografer->delete();
        return redirect()->route('fotograferIndex')->with('alertHapus', $data);
    }
}
