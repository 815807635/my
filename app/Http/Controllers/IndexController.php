<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //主页
    public function index(){
        $article = Article::all();
        return view('index.index',compact('article'));
    }

    //文章
    public function article($id){
        $article = Article::find($id);
        return view('index.details',compact('article'));
    }
}
