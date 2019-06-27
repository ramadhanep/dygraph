<?php

namespace App\Http\Controllers\Dygraph;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Image;

use App\Category;

class CategoryController extends Controller
{
    public function index(){
        $d['categories'] = Category::orderBy('id', 'DESC')->get();
        return view('app.category.index', $d);
    }
    public function add(){
        return view('app.category.add');
    }
    public function save(Request $r){
        $categories = new Category;
        $categories->category = $r->input('category');

        $img_category = $r->file('img_category');
        if(!empty($img_category)){
            $rand = bin2hex(openssl_random_pseudo_bytes(100)).".".$img_category->extension();
            $rand_md5 = md5($rand).".".$img_category->extension();
            $categories->img_category = $rand_md5;

            $img_category_resize = Image::make($img_category->getRealPath());              
            $img_category_resize->resize(300, 250, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('UploadedFile/img_category/' .$rand_md5));
        }

        $categories->save();
        return redirect()->route('categoryIndex')->with('alertTambah', $r->input('category'));
    }
    public function edit($id){
        $d['categories'] = Category::find($id);
        return view('app.category.edit', $d);
    }
    public function prosesEdit(Request $r, $id){
        $categories = Category::find($id);
        $categories->category = $r->input('category');

        $img_category = $r->file('img_category');
        if(!empty($img_category)){
            $rand = bin2hex(openssl_random_pseudo_bytes(100)).".".$img_category->extension();
            $rand_md5 = md5($rand).".".$img_category->extension();
            $categories->img_category = $rand_md5;

            $img_category_resize = Image::make($img_category->getRealPath());              
            $img_category_resize->resize(300, 250, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('UploadedFile/img_category/' .$rand_md5));
        }

        $categories->save();
        return redirect()->route('categoryIndex')->with('alertEdit', $r->input('category'));
    }
    public function delete($id){
        $categories = Category::find($id);
        $data = $categories->category;
        $categories->delete();
        return redirect()->route('categoryIndex')->with('alertHapus', $data);
    }
}
