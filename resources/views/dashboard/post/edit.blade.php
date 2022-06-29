@extends('layouts.dashboard.master')
@section('title', 'Post')
@push('styles')
    <link rel="stylesheet" href="/assets/dashboard/vendor/summernote/summernote-bs4.min.css">
@endpush
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Edit Post</h1>
        <div class="my-4">
            <div class="d-flex">
                <div class="flex-grow-1">
                    <a href="/post" class="btn btn-secondary btn-sm mr-1">
                        Back
                    </a>
                </div>
                <a href="/post-category" class="btn btn-success btn-sm">
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
                <form action="/post/{{ $post->id }}" method="POST" id="formAdd">
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
                                        {{ old('category_id', $post->category_id) == $category->id ? 'selected' : '' }}>
                                        {{ $category->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" id="title"
                                    class="form-control  @error('title') is-invalid @enderror"
                                    value="{{ old('title', $post->title) }}" autofocus autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md mb-3">
                            <label for="deskripsi">Description</label>
                            <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi" cols="10"
                                rows="5">{{ old('deskripsi', $post->deskripsi) }}</textarea>
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
