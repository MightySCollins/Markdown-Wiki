<?php

namespace App\Http\Controllers;

use Cache;
use App\Models\Post;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index()
    {
        $posts = Cache::remember('posts', 100, function() {
            return Post::take(10)->get();
        });
        
        return view('home', ['posts' => $posts]);
    }
    
}
