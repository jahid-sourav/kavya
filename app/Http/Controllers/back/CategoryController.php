<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //

    protected $categories;
    protected $category;

    public function index()
    {
        return view('back-end.pages.add-category');
    }

    public function categoryCreated(Request $request)
    {
        Category::categoryCreated($request);
        return redirect()->back()->with('message', 'Category Added');
    }

    public function manageCategory()
    {
        $this->categories = Category::all();
        return view('back-end.pages.manage-category', ['categories' => $this->categories]);
    }

    public function editCategory($id)
    {
        $this->category = Category::find($id);
        return view('back-end.pages.edit-category', ['category' => $this->category]);
    }

    public function categoryUpdated(Request $request)
    {
        Category::categoryUpdated($request);
        return redirect('manage-category')->with('message', 'Category Updated');
    }

    public function categoryDeleted($id)
    {
        $this->category = Category::find($id);
        $this->category->delete();
        return redirect()->back()->with('message', 'Category Deleted');
    }
}
