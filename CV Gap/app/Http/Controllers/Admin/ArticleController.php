<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryArticle;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {

    }
    public function new()
    {
        $category_data = CategoryArticle::orderBy('id','DESC')->get();
        return view('wp.newArticles',['category_data'=>$category_data]);
    }
}
