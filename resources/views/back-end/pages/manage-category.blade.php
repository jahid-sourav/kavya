@extends('back-end.master')
@section('title')
Manage Category
@endsection
@section('page-name')
Manage Category Page
@endsection
@section('card-title')
Manage Category
@endsection
@section('body')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Manage Category</h4>
                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th>Category Name</th>
                            <th>Take Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $category->name }}</td>
                            <td>
                                <a href="{{ route('edit-category', ['id' => $category->id]) }}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                    <i class="mdi mdi-pencil"></i>
                                </a>
                                <a href="{{ route('category-deleted', ['id' => $category->id]) }}" onclick="return confirm('Delete It?')" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
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
