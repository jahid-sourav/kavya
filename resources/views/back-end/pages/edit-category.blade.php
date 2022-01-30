@extends('back-end.master')
@section('title')
Edit Category
@endsection
@section('page-name')
Edit Category Page
@endsection
@section('card-title')
Edit Category
@endsection
@section('body')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title text-center">Edit Category</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('category-updated') }}" method="POST">
                    @csrf
                    <input type="hidden" name="category_id" value="{{ $category->id }}">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="name" class="col-form-label">Category Name</label>
                            </div>
                            <div class="col-md-10">
                                <input class="form-control" type="text" id="name" name="name" value="{{ $category->name }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row justify-content-end">
                            <div class="col-md-10">
                                <input type="submit" class="w-100 btn btn-primary waves-effect waves-light" value="Update Category">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
