<?php

namespace App\Http\Controllers\Dygraph;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

use Image;

use App\User;

class ProfileController extends Controller
{
    public function index(){
        $id = \Auth::user()->id;
        $d['masters'] = User::find($id); 
        return view('app.profile.index', $d);
    }
    public function prosesEdit(Request $r,$id){
        $d = User::find($id);
        $d->name = $r->input('name');
        $d->email = $r->input('email');

        
        $profile = $r->file('profile');
        if(!empty($profile)){
            $rand = bin2hex(openssl_random_pseudo_bytes(100)).".".$profile->extension();
            $rand_md5 = md5($rand).".".$profile->extension();
            $d->profile = $rand_md5;

            $profile_resize = Image::make($profile->getRealPath());
            $profile_resize->resize(150, 150, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('UploadedFile/user_profile/' .$rand_md5));
        }

        $old_password = $r->input('old_password');
        $new_password = $r->input('new_password');
        if(!empty($old_password) && !empty($new_password)){
            $dh = $old_password;
            $ch = \Auth::user()->password;
            if (password_verify($dh, $ch)) {
                $d->password = Hash::make($new_password);
                $d->save();
                return redirect()->route('profileIndex')->with('alertSuccess', '.......');
            }
            else{
                return redirect()->route('profileIndex')->with('alertPassword', $ch);
            }
        }
        else{
            $d->save();
            return redirect()->route('profileIndex')->with('alertSuccess', '.......');
        }
    }
}
