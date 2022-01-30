@extends('front-end.master')
@section('title')
Blog Details
@endsection
@section('body')
<section class="single-layout">
    <div class="container">
        <div class="blog-img-main">
            <img src="{{ asset($blog->blog_image) }}" alt="Blog Image">
        </div>
        <div class="row align-items-center justify-content-center">
            <div class="col-md-10">
                <div class="blog-content-wrap">
                    <div class="blog-title-wrap">
                        <div class="author-date">
                            <a class="author" href="javascript:void(0)">
                                <img src="{{ asset($blog->author_image) }}" alt="Author" class="rounded-circle">
                                <span>{{ $blog->author_name }}</span>
                            </a>
                        </div>
                        <ul class="category-tag-list mb-0">
                            <li class="category-tag-name">
                                <a href="{{ route('category', ['id' => $blog->category->id]) }}">{{ $blog->category->name }}</a>
                            </li>
                        </ul>
                        <h1 class="title-font">{{ $blog->title }}</h1>
                    </div>

                    <div class="blog-desc">
                        <p>
                            {{ $blog->description }}
                        </p>
                    </div>
                    <div class="tags-wrap">
                        <div class="share-buttons">
                            <p>Share Now:</p>
                            <ul class="share-list">
                                <li>
                                    <a href="javacript:void(0)">
                                        <img src="{{ asset('/') }}assets/front-end/assets/images/facebook.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="javacript:void(0)">
                                        <img src="{{ asset('/') }}assets/front-end/assets/images/twitter.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="javacript:void(0)">
                                        <img src="{{ asset('/') }}assets/front-end/assets/images/pinterest.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="javacript:void(0)">
                                        <img src="{{ asset('/') }}assets/front-end/assets/images/messenger.png" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
