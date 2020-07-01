<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index(){
        $articles = Article::all();
        return response()->json([
            'article'=>$articles
        ]);
    }
}
