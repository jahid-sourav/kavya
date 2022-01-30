<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    protected static $category;

    protected static function categoryCreated($request)
    {
        self::$category = new Category();
        self::$category->name = $request->name;
        self::$category->save();
    }

    protected static function categoryUpdated($request)
    {
        self::$category = Category::find($request->category_id);
        self::$category->name = $request->name;
        self::$category->save();
    }

    public function blog()
    {
        return $this->hasMany(Blog::class);
    }
}
