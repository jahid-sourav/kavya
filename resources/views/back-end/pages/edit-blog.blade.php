@extends('back-end.master')
@section('title')
Edit Blog
@endsection
@section('page-name')
Edit Blog Page
@endsection
@section('card-title')
Edit Blog
@endsection
@section('body')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title text-center">Edit Blog</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('blog-updated') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="category_id" class="col-form-label">Category Name</label>
                            </div>
                            <div class="col-md-10">
                                <select class="form-control" name="category_id" id="category_id" required>
                                    <option value="" selected>Select Category</option>
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="title" class="col-form-label">Blog Title</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="title" id="title" value="{{ $blog->title }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="description" class="col-form-label">Blog Description</label>
                            </div>
                            <div class="col-md-10">
                                <textarea name="description" id="description" class="form-control">{{ $blog->description }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="author_image" class="col-form-label">Author Image</label>
                            </div>
                            <div class="col-md-10">
                                <img src="{{ asset($blog->author_image) }}" alt="Author Image" style="height: 50px; width: 50px; object-fit:cover;">
                                <input type="file" class="form-control mt-4" name="author_image" id="author_image">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="author_name" class="col-form-label">Author Name</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="author_name" id="author_name" value="{{ $blog->author_name }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="blog_image" class="col-form-label">Blog Image</label>
                            </div>
                            <div class="col-md-10">
                                <img src="{{ asset($blog->blog_image) }}" alt="Blog Image" style="height: 150px; width: 150px; object-fit:cover;">
                                <input type="file" class="form-control mt-4" name="blog_image" id="blog_image">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row justify-content-end">
                            <div class="col-md-10">
                                <input type="submit" class="w-100 btn btn-primary waves-effect waves-light" value="Update Blog">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
