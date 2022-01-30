<?php
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;

// Front-end Routes Starts Here
Route::get('/',[
    'uses' => '\App\Http\Controllers\front\HomeController@index',
    'as'  => 'home'
]);

Route::get('/category/{id}',[
    'uses' => '\App\Http\Controllers\front\CategoryController@index',
    'as'  => 'category'
]);

Route::get('/details/{id}',[
    'uses' => '\App\Http\Controllers\front\DetailsController@index',
    'as'  => 'details'
]);

Route::get('/contact',[
    'uses' => '\App\Http\Controllers\front\ContactController@index',
    'as'  => 'contact'
]);
Route::post('/submitted',[
    'uses' => '\App\Http\Controllers\front\ContactController@submitted',
    'as'  => 'submitted'
]);
Route::get('/search',[
    'uses' => '\App\Http\Controllers\front\SearchController@search',
    'as'  => 'search'
]);
// Front-end Routes Ends Here


// Back-end Routes Starts Here
Route::group(['middleware' => ['auth:sanctum', 'verified']], function(){
    Route::get('/dashboard',[
        'uses' => '\App\Http\Controllers\back\HomeController@index',
        'as'  => 'dashboard'
    ]);

    // Category Routes Starts Here
    Route::get('/add-category',[
        'uses' => '\App\Http\Controllers\back\CategoryController@index',
        'as'  => 'add-category'
    ]);
    Route::post('/category-created',[
        'uses' => '\App\Http\Controllers\back\CategoryController@categoryCreated',
        'as'  => 'category-created'
    ]);
    Route::get('/manage-category',[
        'uses' => '\App\Http\Controllers\back\CategoryController@manageCategory',
        'as'  => 'manage-category'
    ]);
    Route::get('/edit-category/{id}',[
        'uses' => '\App\Http\Controllers\back\CategoryController@editCategory',
        'as'  => 'edit-category'
    ]);
    Route::post('/category-updated',[
        'uses' => '\App\Http\Controllers\back\CategoryController@categoryUpdated',
        'as'  => 'category-updated'
    ]);
    Route::get('/category-deleted/{id}',[
        'uses' => '\App\Http\Controllers\back\CategoryController@categoryDeleted',
        'as'  => 'category-deleted'
    ]);
    // Category Routes Ends Here


    // Blog Routes Starts Here
    Route::get('/add-blog',[
        'uses' => '\App\Http\Controllers\back\BlogController@index',
        'as'  => 'add-blog'
    ]);
    Route::post('/blog-created',[
        'uses' => '\App\Http\Controllers\back\BlogController@blogCreated',
        'as'  => 'blog-created'
    ]);
    Route::get('/manage-blog',[
        'uses' => '\App\Http\Controllers\back\BlogController@manageBlog',
        'as'  => 'manage-blog'
    ]);
    Route::get('/edit-blog/{id}',[
        'uses' => '\App\Http\Controllers\back\BlogController@editBlog',
        'as'  => 'edit-blog'
    ]);
    Route::post('/blog-updated',[
        'uses' => '\App\Http\Controllers\back\BlogController@blogUpdated',
        'as'  => 'blog-updated'
    ]);
    Route::get('/blog-deleted/{id}',[
        'uses' => '\App\Http\Controllers\back\BlogController@blogDeleted',
        'as'  => 'blog-deleted'
    ]);
    // Blog Routes Ends Here

    // Contact Routes Starts Here
    Route::get('/manage-contact',[
        'uses' => '\App\Http\Controllers\back\ContactController@manageContact',
        'as'  => 'manage-contact'
    ]);
    // Contact Routes Ends Here

});
// Back-end Routes Ends Here
