<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    protected $blogs;
    public function index()
    {
        $this->blogs = Blog::paginate(6);
        return view('front-end.pages.home', ['blogs' => $this->blogs]);
    }
}
