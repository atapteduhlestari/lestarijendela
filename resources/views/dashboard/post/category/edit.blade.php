@extends('layouts.dashboard.master')
@section('title', 'post Category Edit')
@push('styles')
    <link href="/assets/dashboard/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endpush
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Edit Post - Category</h1>
        <div class="my-4">
            <div class="d-flex">
                <div class="flex-grow-1">
                    <a href="/post-category" class="btn btn-secondary btn-sm mr-1">
                        Back
                    </a>
                </div>
                <a href="/post" class="btn btn-success btn-sm">
                    Post
                </a>
            </div>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Form</h6>
            </div>
            <div class="card-body">
                <form action="/post-category/{{ $postCategory->id }}" method="POST" id="formAdd">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" id="title"
                                    class="form-control  @error('title') is-invalid @enderror"
                                    value="{{ old('title', $postCategory->title) }}" autofocus autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <button type="submit" id="btnSubmit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
