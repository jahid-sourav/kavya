<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['category_id','title','description','author_image','author_name','blog_image'];

    protected static $blog;

    // Propeerty For Author Image
    protected static $authorImage;
    protected static $authorImageDirectory;
    protected static $authorImageName;
    protected static $authorImageUrl;

    // Propeerty For Blog Image
    protected static $blogImage;
    protected static $blogImageDirectory;
    protected static $blogImageName;
    protected static $blogImageUrl;


    // Method For Author Image
    public static function saveAuthorImage($request)
    {
        self::$authorImage = $request->file('author_image');
        if(self::$authorImage)
        {
            self::$authorImageName = 'Author'.time().'.'.
            self::$authorImage->getClientOriginalExtension();
            self::$authorImageDirectory = 'assets/back-end/assets/images/author/';
            self::$authorImage->move(self::$authorImageDirectory, self::$authorImageName);
            self::$authorImageUrl = self::$authorImageDirectory.self::$authorImageName;
            return self::$authorImageUrl;
        }else
        {
            return '';
        }
    }


    // Method For Blog Image
    public static function saveBlogImage($request)
    {
        self::$blogImage = $request->file('blog_image');
        if(self::$blogImage)
        {
            self::$blogImageName = 'Blog'.time().'.'.
            self::$blogImage->getClientOriginalExtension();
            self::$blogImageDirectory = 'assets/back-end/assets/images/blog/';
            self::$blogImage->move(self::$blogImageDirectory, self::$blogImageName);
            self::$blogImageUrl = self::$blogImageDirectory.self::$blogImageName;
            return self::$blogImageUrl;
        }
    }

    protected static function blogCreated($request)
    {
        self::$blog                 = new Blog();
        self::$blog->category_id    = $request->category_id;
        self::$blog->title          = $request->title;
        self::$blog->description    = $request->description;
        self::$blog->author_image   = self::saveAuthorImage($request);
        self::$blog->author_name    = $request->author_name;
        self::$blog->blog_image     = self::saveBlogImage($request);
        self::$blog->save();
    }

    protected static function blogUpdated($request)
    {
        self::$blog                 = Blog::find($request->blog_id);
        if($request->file('author_image'))
        {
            if(file_exists(self::$blog->author_image))
            {
                unlink(self::$blog->author_image);
            }
            self::$authorImageUrl = self::saveAuthorImage($request);
        }
        else{
            self::$authorImageUrl = self::$blog->author_image;
        }
        if($request->file('blog_image'))
        {
            if(file_exists(self::$blog->blog_image))
            {
                unlink(self::$blog->blog_image);
            }
            self::$blogImageUrl = self::saveBlogImage($request);
        }
        else{
            self::$blogImageUrl = self::$blog->blog_image;
        }
        self::$blog->category_id    = $request->category_id;
        self::$blog->title          = $request->title;
        self::$blog->description    = $request->description;
        self::$blog->author_image   = self::$authorImageUrl;
        self::$blog->author_name    = $request->author_name;
        self::$blog->blog_image     = self::$blogImageUrl;
        self::$blog->save();
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
