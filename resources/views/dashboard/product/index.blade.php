@extends('layouts.dashboard.master')
@section('title', 'Product')
@push('styles')
    <link href="/assets/dashboard/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endpush
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Product</h1>
        <div class="my-4">
            <div class="d-flex">
                <div class="flex-grow-1">
                    <button class="btn btn-primary btn-sm flex-grow-1" type="button" data-toggle="modal"
                        data-target="#addNewRecord">
                        Add <i class="fas fa-plus-circle"></i>
                    </button>
                </div>
                <a href="/product-category" class="btn btn-info btn-sm mr-1">
                    Category
                </a>
                <a href="/product-sub-category" class="btn btn-success btn-sm">
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
                <div class="table-responsive">
                    <table class="table table-borderless" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Sub Category</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>~
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $product->title }}</td>
                                    <td>{{ $product->category->title ?? '' }}</td>
                                    <td>{{ $product->subCategory->title ?? '' }}</td>
                                    <td>
                                        <div class="d-flex justify-content-around">
                                            <a class="btn btn-outline-dark btn-sm"
                                                href="/product-image/create/{{ $product->id }}">Add
                                                Image</a>
                                            <div>
                                                <a title="Edit Data" href="/product/{{ $product->id }}/edit"
                                                    class="btn btn-outline-dark btn-sm">Edit</a>
                                            </div>
                                            <div>
                                                <form action="/product/{{ $product->id }}" method="post" id="deleteForm">
                                                    @csrf
                                                    @method('delete')
                                                    <button title="Delete Data" class="btn btn-outline-danger btn-sm"
                                                        onclick="return false" id="deleteButton"
                                                        data-id="{{ $product->id }}">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

    <!-- Modal -->
    <div class="modal fade" id="addNewRecord" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="addNewRecordLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header bg-gradient-dark">
                    <h5 class="modal-title text-white" id="addNewRecordLabel">Form - Add New Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="text-white" aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/product" method="POST" id="formAdd">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="category_id">Category</label>
                                <select class="form-control @error('category_id') is-invalid @enderror" name="category_id"
                                    id="category_id">
                                    <option value=""></option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                            {{ $category->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="sub_category_id">Sub Category</label>
                                <select class="form-control @error('sub_category_id') is-invalid @enderror"
                                    name="sub_category_id" id="sub_category_id">
                                    <option value=""></option>
                                    @foreach ($subCategories as $sub)
                                        <option value="{{ $sub->id }}"
                                            {{ old('sub_category_id') == $sub->id ? 'selected' : '' }}>
                                            {{ $sub->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" id="title"
                                        class="form-control  @error('title') is-invalid @enderror"
                                        value="{{ old('title') }}" autofocus autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="deskripsi">Description</label>
                                <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi" cols="10"
                                    rows="5">{{ old('deskripsi') }}</textarea>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="spesifikasi">Spesification</label>
                                <textarea class="form-control @error('spesifikasi') is-invalid @enderror" id="spesifikasi" name="spesifikasi"
                                    cols="10" rows="5">{{ old('spesifikasi') }}</textarea>
                            </div>
                        </div>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" id="btnSubmit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <!-- Page level plugins -->
    <script src="/assets/dashboard/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="/assets/dashboard/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="/assets/dashboard/js/demo/datatables-demo.js"></script>

    <script>
        let formDelete = $('#deleteForm');

        $(document).on('click', '#deleteButton', function(e) {
            e.preventDefault();
            let id = $(this).data('id');
            formDelete.attr('action', `/product/${id}`)
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    formDelete.submit();
                }
            })
        });
    </script>

    @if ($errors->any())
        <script>
            $('#addNewRecord').modal('show');
        </script>
    @endif
@endpush
