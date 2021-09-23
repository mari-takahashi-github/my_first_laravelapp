<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illminate\Http\Request;
use Illuminate\Support\Collection;
use App\Models\Article;

class ShowArticleController extends Controller
{
    public function index()
    {
        // $groups = Article::all()->groupBy('day', 'desc');
        return view('ShowArticle')
            ->with(['days' => Article::all()->groupBy('day','desc')->sortBy('desc')]);

        // $articles = Article::all()->sortByDesc('id');
        // return view('ShowArticle', ['articles' => $articles]);
        

    }
}
