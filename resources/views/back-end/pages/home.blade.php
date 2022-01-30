@extends('back-end.master')
@section('title')
Home
@endsection
@section('page-name')
Home
@endsection
@section('card-title')
Home
@endsection
@section('body')
<div class="row justify-content-center pt-5">
    <div class="col-xl-8">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <a href="{{ route('add-category') }}" class="card-body d-block text-center text-uppercase bg-dark rounded text-white">
                        <strong>Category Info</strong>
                    </a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <a href="{{ route('add-blog') }}" class="card-body d-block text-center text-uppercase bg-dark rounded text-white">
                        <strong>Blog Info</strong>
                    </a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <a href="{{ route('manage-contact') }}" class="card-body d-block text-center text-uppercase bg-dark rounded text-white">
                        <strong>Contact Info</strong>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
