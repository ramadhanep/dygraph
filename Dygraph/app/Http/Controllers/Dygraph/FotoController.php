<?php

namespace App\Http\Controllers\Dygraph;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Image;

use App\Foto;
use App\Fotografer;
use App\Category;
use App\Like;

class FotoController extends Controller
{
    public function index(){
        $d['fotos'] = Foto::orderBy('id', 'DESC')->get();
        return view('app.foto.index', $d);
    }
    public function add(){
        $d['categories'] = Category::orderBy('category', 'ASC')->get();
        $d['fotografers'] = Fotografer::orderBy('nama_lengkap', 'ASC')->get();
        return view('app.foto.add', $d);
    }
    public function save(Request $r){
        $foto = new Foto;
        $foto->id_category = $r->input('id_category');
        $foto->id_fotografer = $r->input('id_fotografer');
        $foto->deskripsi_foto = $r->input('deskripsi_foto');
        $foto->time = time();

        $foto_ = $r->file('foto');
        if(!empty($foto_)){
            $rand = bin2hex(openssl_random_pseudo_bytes(100)).".".$foto_->extension();
            $rand_md5 = md5($rand).".".$foto_->extension();
            $foto->foto = $rand_md5;

            $foto__resize = Image::make($foto_->getRealPath());
            $foto__resize->resize(500, 350, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('UploadedFile/foto/' .$rand_md5));
        }

        $foto->save();

        $check_id = Foto::orderBy('id','DESC')->first();
        $id = $check_id->id;
        $dd = new Like;
        $dd->id_foto = $id;
        $dd->like_count = 0;
        $dd->save();
        return redirect()->route('fotoIndex')->with('alertTambah', '......');
    }
    public function edit($id){
        $d['fotos'] = Foto::find($id);
        $d['categories'] = Category::orderBy('category', 'ASC')->get();
        $d['fotografers'] = Fotografer::orderBy('nama_lengkap', 'ASC')->get();
        return view('app.foto.edit', $d);
    }
    public function prosesEdit(Request $r, $id){
        $foto = Foto::find($id);
        $foto->id_category = $r->input('id_category');
        $foto->id_fotografer = $r->input('id_fotografer');
        $foto->deskripsi_foto = $r->input('deskripsi_foto');

        $foto_ = $r->file('foto');
        if(!empty($foto_)){
            $rand = bin2hex(openssl_random_pseudo_bytes(100)).".".$foto_->extension();
            $rand_md5 = md5($rand).".".$foto_->extension();
            $foto->foto = $rand_md5;

            $foto__resize = Image::make($foto_->getRealPath());              
            $foto__resize->resize(500, 350, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('UploadedFile/foto/' .$rand_md5));
        }

        $foto->save();
        return redirect()->route('fotoIndex')->with('alertEdit', '......');
    }
    public function delete($id){
        $foto = Foto::find($id);
        $foto->delete();
        return redirect()->route('fotoIndex')->with('alertHapus', '......');
    }
}
