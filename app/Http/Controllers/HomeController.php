<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show_post(){
        $post = Post::all();
        //$post = Post::paginate(3);
        return view('/home',['posts'=>$post]);
    }
}
