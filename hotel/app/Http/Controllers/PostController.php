<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    $posts=orderBy('created_at')->paginate(5);
    return view('blog.main', ['posts'=>$posts]);
}
