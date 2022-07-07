@extends('layouts.dashboard.master')
@section('title', 'Project')
@push('styles')
    <link rel="stylesheet" href="/assets/dashboard/vendor/summernote/summernote-bs4.min.css">
@endpush
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Edit Project</h1>
        <div class="my-4">
            <div class="d-flex">
                <div class="flex-grow-1">
                    <a href="/project" class="btn btn-secondary btn-sm mr-1">
                        Back
                    </a>
                </div>
                <a href="/project-category" class="btn btn-success btn-sm">
                    Category
                </a>
            </div>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Form</h6>
            </div>
            <div class="card-body">
                <form action="/project/{{ $project->id }}" method="post" id="formAdd">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="category_id">Category</label>
                            <select class="form-control @error('category_id') is-invalid @enderror" name="category_id"
                                id="category_id">
                                <option value=""></option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ old('category_id', $project->category_id) == $category->id ? 'selected' : '' }}>
                                        {{ $category->title }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="product_id">Product</label>
                            <select class="form-control @error('product_id') is-invalid @enderror" name="product_id"
                                id="product_id">
                                <option value=""></option>
                                @foreach ($products as $product)
                                    <option value="{{ $product->id }}"
                                        {{ old('product_id', $project->product_id) == $product->id ? 'selected' : '' }}>
                                        {{ $product->title }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" id="title"
                                    class="form-control  @error('title') is-invalid @enderror"
                                    value="{{ old('title', $project->title) }}" autofocus autocomplete="off">
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="year">Year</label>
                                <input type="text" name="year" id="year"
                                    class="form-control  @error('year') is-invalid @enderror"
                                    value="{{ old('year', $project->year) }}" autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <button type="submit" id="btnSubmit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="/assets/dashboard/vendor/summernote/summernote-bs4.min.js"></script>
    <script>
        $('#deskripsi').summernote({
            tabsize: 2,
            height: 250,
            toolbar: [
                ['style', ['style', 'strikethrough', 'superscript', 'subscript']],
                ['font', ['bold', 'underline', 'italic', 'clear']],
                ['fontname', ['fontname']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']],
            ],
        });
    </script>
@endpush
