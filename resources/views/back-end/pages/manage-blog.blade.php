@extends('back-end.master')
@section('title')
Manage Blog
@endsection
@section('page-name')
Manage Blog Page
@endsection
@section('card-title')
Manage Blog
@endsection
@section('body')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Manage Blog</h4>
                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th>Category Name</th>
                            <th>Category Id</th>
                            <th>Blog Id</th>
                            <th>Blog Title</th>
                            <th>Blog Description</th>
                            <th>Author Image</th>
                            <th>Author Name</th>
                            <th>Blog Image</th>
                            <th>Take Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blogs as $blog)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $blog->category->name }}</td>
                            <td>{{ $blog->category->id }}</td>
                            <td>{{ $blog->id }}</td>
                            <td>{{ Str::limit($blog->title, 5) }}</td>
                            <td>{{ Str::limit($blog->description, 10) }}</td>
                            <td>
                                <img src="{{ $blog->author_image }}" alt="Author Image" style="height: 50px; width:50px; border-radius:50%;">
                            </td>
                            <td>{{ $blog->author_name }}</td>
                            <td>
                                <img src="{{ $blog->blog_image }}" alt="Blog Image" style="height: 100px; width:100px; object-fit:cover;">
                            </td>
                            <td>
                                <a href="{{ route('edit-blog', ['id' => $blog->id]) }}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                    <i class="mdi mdi-pencil"></i>
                                </a>
                                <a href="{{ route('blog-deleted', ['id' => $blog->id]) }}" onclick="return confirm('Delete It?')" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                    <i class="mdi mdi-trash-can"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
