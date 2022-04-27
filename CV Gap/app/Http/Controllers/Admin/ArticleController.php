<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryArticle;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class ArticleController extends Controller
{
    public function index()
    {
        return view('wp.articles');
    }
    public function new()
    {
        $category_data = CategoryArticle::orderBy('id','DESC')->get();
        return view('wp.newArticles',['category_data'=>$category_data]);
    }

    public function create(Request $request)
    {
        $date = $request->validate([
            "name" => "required|string",
            "category" => "required|string",
            "tags" => "required|string",
            "txt" => "required|string",
            "image" => "image|mimes:jpg,png,jpeg|max:2048",
        ]);
        $image = $request->file('image');
        $image->move(public_path('images/upload/articles'), date('Y') . '_' . date('M') . '_' . $image->getClientOriginalName());
        $request->image = '/images/upload/articles' . '/' . date('Y') . '_' . date('M') . '_' . $image->getClientOriginalName();
        Article::create([
            'name' => $request->name , 
            'image' => $request->image , 
            'category' => $request->category , 
            'tags' => $request->tags , 
            'text' => $request->txt , 
            'from' => auth()->user()->name , 
        ]);
        alert()->success('', 'مقاله جدید ایجاد شد')->persistent('باشه');
        return redirect()->back();


    }

}
