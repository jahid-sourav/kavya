<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //

    protected $blogs;
    protected $blog;

    public function index()
    {
        return view('back-end.pages.add-blog');
    }

    public function blogCreated(Request $request)
    {
        Blog::blogCreated($request);
        return redirect()->back()->with('message', 'Blog Created');
    }

    public function manageBlog()
    {
        $this->blogs = Blog::all();
        return view('back-end.pages.manage-blog', ['blogs' => $this->blogs]);
    }

    public function editBlog($id)
    {
        $this->blog = Blog::find($id);
        return view('back-end.pages.edit-blog', ['blog' => $this->blog]);
    }

    public function blogUpdated(Request $request)
    {
        Blog::blogUpdated($request);
        return redirect('manage-blog')->with('message', 'Blog Updated');
    }

    public function blogDeleted($id)
    {
        $this->blog = Blog::find($id);
        if(file_exists($this->blog->author_image)){
            unlink($this->blog->author_image);
        }
        if(file_exists($this->blog->blog_image)){
            unlink($this->blog->blog_image);
        }
        $this->blog->delete();
        return redirect()->back()->with('message', 'Blog Deleted');
    }
}
