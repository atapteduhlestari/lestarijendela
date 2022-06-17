@extends('layouts.dashboard.master')
@section('title', 'Product')
@push('styles')
    <link href="/assets/dashboard/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endpush
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Product Category</h1>
        <div class="my-4">
            <div class="d-flex">
                <div class="flex-grow-1">
                    <a href="/product-category" class="btn btn-secondary btn-sm mr-1">
                        Back
                    </a>
                </div>
                <a href="/product" class="btn btn-info btn-sm mr-1">
                    Product
                </a>
                <a href="/sub-category" class="btn btn-success btn-sm">
                    Sub Category
                </a>
            </div>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">List Product</h6>
            </div>
            <div class="card-body">
                <form action="/product-sub-category/{{ $productSubCategory->id }}" method="POST" id="formAdd"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title">Product Name</label>
                                <input type="text" name="title" id="title"
                                    class="form-control  @error('title') is-invalid @enderror"
                                    value="{{ old('title', $productSubCategory->title) }}" autofocus autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="category_id">Category</label>
                                <select class="form-control @error('category_id') is-invalid @enderror" name="category_id"
                                    id="category_id">
                                    <option value=""></option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ old('category_id', $productSubCategory->category_id) == $category->id ? 'selected' : '' }}>
                                            {{ $category->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <button type="submit" id="btnSubmit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
