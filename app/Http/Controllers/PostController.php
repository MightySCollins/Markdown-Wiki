<?php

namespace App\Http\Controllers;

use Cache;
use App\Models\Post;
use App\Models\Edit;
use App\Http\Requests;
use Illuminate\Http\Request;
use GrahamCampbell\Markdown\Facades\Markdown;

class PostController extends Controller
{
    public function index($slug)
    {
        $post = Cache::remember('post-' . $slug, 100, function() use ($slug) {
            $post = Post::where('slug', $slug)->firstOrFail();
            $post->edit = $post->edits()->orderBy('id', 'desc')->first();
            $post->markdown = Markdown::convertToHtml($post->edit->content);
            return $post;
        });
        
        return view('posts.post', ['post' => $post]);
    }
    
    public function edit($slug)
    {
        
        $post = Post::where('slug', $slug)->firstOrFail();
        $post->edit = $post->edits()->orderBy('id', 'desc')->first();
        $post->markdown = Markdown::convertToHtml($post->edit->content);
        
        return view('posts.edit', ['post' => $post]);
    }
    
    public function save(Request $request, $slug)
    {
        $this->validate($request, [
            'content' => 'required',
        ]);
        
        $post = Post::where('slug', $slug)->firstOrFail();
        
        Edit::insert([
            'post_id' => $post->id,
            'user_id' => $request->user()->id,
            'content' => $request->content
        ]);
        
        Cache::flush('post-' . $slug);
        
        return redirect($slug);
    }
    
}
