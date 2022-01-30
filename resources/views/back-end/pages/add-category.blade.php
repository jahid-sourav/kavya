@extends('back-end.master')
@section('title')
Add Category
@endsection
@section('page-name')
Add Category Page
@endsection
@section('card-title')
Add Category
@endsection
@section('body')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title text-center">Add Category</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('category-created') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="name" class="col-form-label">Category Name</label>
                            </div>
                            <div class="col-md-10">
                                <input class="form-control" type="text" id="name" name="name" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row justify-content-end">
                            <div class="col-md-10">
                                <input type="submit" class="w-100 btn btn-primary waves-effect waves-light" value="Add Category">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
