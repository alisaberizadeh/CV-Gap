<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryArticle;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $data_Category = CategoryArticle::orderBy('id','DESC')->get();
        return view('wp.Categories',['data_Category'=>$data_Category]);
    }

    public function create(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'slug' => 'required|string'
        ]);
        $check_slug = CategoryArticle::where('slug', $request->slug)->first();
        if ($check_slug) {
            return redirect()->back()->with('status', 'این نامک از قبل وجود دارد !!!');
        } else {
            CategoryArticle::create([
                'name' => $request->name,
                'slug' => $request->slug,
            ]);
            alert()->success('', "دسته بندی ذخیره شد")->persistent('باشه');
            return redirect()->back();
        }
    }

    public function delete(Request $request , $id)
    {
        CategoryArticle::find($id)->delete();
        alert()->success('', "با موفقیت حذف شد")->persistent('باشه');
        return redirect()->back();
    }
}
