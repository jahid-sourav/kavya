<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class DetailsController extends Controller
{
    //
    protected $blog;

    public function index($id)
    {
        $this->blog = Blog::find($id);
        return view('front-end.pages.details', ['blog' => $this->blog]);
    }
}
