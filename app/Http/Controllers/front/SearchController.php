<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //

    protected $query;
    protected $blogs;

    public function search(Request $request)
    {
        $this->query = $request->input('query');
        $this->blogs = Blog::query()
            ->where('title', 'LIKE', "%{$this->query}%")
            ->get();
        return view('front-end.pages.search', ['blogs' => $this->blogs]);
    }
}


