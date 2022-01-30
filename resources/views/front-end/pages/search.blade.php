@extends('front-end.master')
@section('title')
Search Results
@endsection
@section('body')
<section class="recommended-posts py-5">
    <div class="container">
        <div class="section-title">
            <h2>Search Results</h2>
        </div>
        <div class="more-content-grid">
            <div class="row">
                @if($blogs->isNotEmpty())
                @foreach ($blogs as $blog)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <a href="{{ route('details', ['id' => $blog->id]) }}">
                            <img src="{{ asset($blog->blog_image) }}" class="card-img-top" alt="Blog Tumbnail">
                        </a>
                        <div class="card-body px-0">
                            <ul class="category-tag-list">
                                <li class="category-tag-name">
                                    <a href="{{ route('category', ['id' => $blog->category->id]) }}">{{ $blog->category->name }}</a>
                                </li>
                            </ul>
                            <h5 class="card-title title-font">
                                <a href="{{ route('details', ['id' => $blog->id]) }}">
                                    {{ Str::limit($blog->title, 26, '...') }}
                                </a>
                            </h5>
                            <div class="blog-desc">
                                <p>
                                    {{ Str::limit($blog->description, 200, '...') }}
                                </p>
                            </div>
                            <div class="author-date">
                                <a class="author" href="javascript:void(0)">
                                    <img src="{{ asset($blog->author_image) }}" alt="Author Image" class="rounded-circle">
                                    <span class="writer-name-small">{{ $blog->author_name }}</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                <div class="col-lg-12 d-flex justify-content-center">
                    <img src="{{ asset("assets/front-end/assets/images/error.jpg") }}" alt="Error Image" style="max-height: 60vh;">
                </div>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection
