<?php

namespace App\Http\Controllers;

// use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
// use Illuminate\Foundation\Bus\DispatchesJobs;
// use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illminate\Http\Request;
use app\Models\Article;

class TopController extends BaseController
{
    // use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function show(){
        return view('welcome');
    }
    
}
