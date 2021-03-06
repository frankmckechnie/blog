<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;
use Carbon\Carbon;
use App\Repositories\Posts;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    } 

    public function index(Posts $posts){
        $posts = $posts->all();
        
    	//$posts = Post::latest()->filter(request(['month', 'year']))->get();

        // if($month = request('month')){
        //     $posts->whereMonth('created_at', Carbon::parse($month)->month);
        // }

        // if($year = request('year')){
        //     $posts->whereYear('created_at', $year);
        // }            
        
   

        //$posts = $posts->get();

    	return view('posts.index', compact('posts')); 
    }

    public function show(Post $post){
    	return view('posts.show', compact('post'));
    }

    public function create(){
    	return view('posts.create');
    }

    public function store(){

    	$this->validate(request(), [
    		'title' => 'required', 
    		'body' => 'required'    		
    	]);

    	// Post::create([
    	// 	'title' => request('title'),
    	// 	'body' => request('body'),
        //        'user_id' => \Auth::id()
    	// ]);

        Auth::user()->publish(new Post(request(['title', 'body'])));

    	return redirect('/');
    }
}
