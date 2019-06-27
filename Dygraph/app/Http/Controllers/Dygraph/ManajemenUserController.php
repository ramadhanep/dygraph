<?php

namespace App\Http\Controllers\Dygraph;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\UserApp;

use Image;

class ManajemenUserController extends Controller
{
    public function index(){
        $d['users'] = UserApp::orderBy('id', 'DESC')->get();
        return view('app.users.index', $d);
    }
    public function add(){
        return view('app.users.add');
    }
    public function save(Request $r){
        $user = new UserApp;
        $user->name = $r->input('name');
        $user->email = $r->input('email');
        $user->password = md5($r->input('password'));

        $profile = $r->file('profile');
        if(!empty($profile)){
            $rand = bin2hex(openssl_random_pseudo_bytes(100)).".".$profile->extension();
            $rand_md5 = md5($rand).".".$profile->extension();
            $user->profile = $rand_md5;

            $profile_resize = Image::make($profile->getRealPath());              
            $profile_resize->resize(150, 150, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('UploadedFile/user_mobile_profile/' .$rand_md5));
        }

        $user->save();
        return redirect()->route('manajemenUserIndex')->with('alertTambah', $r->input('name'));
    }
    public function edit($id){
        $d['users'] = UserApp::find($id);
        return view('app.users.edit', $d);
    }
    public function prosesEdit(Request $r, $id){
        $user = UserApp::find($id);
        $user->name = $r->input('name');
        $user->email = $r->input('email');

        if($r->input('password') != ""){
            $user->password = md5($r->input('password'));
        }

        $profile = $r->file('profile');
        if(!empty($profile)){
            $rand = bin2hex(openssl_random_pseudo_bytes(100)).".".$profile->extension();
            $rand_md5 = md5($rand).".".$profile->extension();
            $user->profile = $rand_md5;

            $profile_resize = Image::make($profile->getRealPath());              
            $profile_resize->resize(150, 150, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('UploadedFile/user_mobile_profile/' .$rand_md5));
        }

        $user->save();
        return redirect()->route('manajemenUserIndex')->with('alertEdit', $r->input('name'));
    }
    public function delete($id){
        $user = UserApp::find($id);
        $data = $user->name;
        $user->delete();
        return redirect()->route('manajemenUserIndex')->with('alertHapus', $data);
    }
}
