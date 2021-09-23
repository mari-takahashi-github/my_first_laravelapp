<?php

namespace App\Http\Controllers;

// use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
// use Illuminate\Foundation\Bus\DispatchesJobs;
// use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Models\Article;
use Carbon\Carbon;

class PostArticleController extends BaseController
{
    public function show(Request $request)
    {
        return view('post');
    }

    public function create(Request $request)
    {
        $article = new Article;
        $form = $request->all();
        $form['day'] = Carbon::now('Asia/Tokyo')->format('Y/m/d');
        $form['time'] = Carbon::now('Asia/Tokyo')->format('H:i:s');
        unset($form['_token']);
        $article->fill($form)->save();
        // return redirect('/article_post');
        return view('posted', ['text'  => $article->text]);
    }


}
