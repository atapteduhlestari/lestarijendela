@extends('layouts.dashboard.master')
@section('title', 'Branch')
@push('styles')
    <link rel="stylesheet" href="/assets/dashboard/vendor/datatables/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/assets/dashboard/vendor/summernote/summernote-bs4.min.css">
@endpush
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Branch</h1>
        <div class="my-4">
            <div class="d-flex">
                <div class="flex-grow-1">
                    <button class="btn btn-primary btn-sm flex-grow-1" type="button" data-toggle="modal"
                        data-target="#addNewRecord">
                        Add <i class="fas fa-plus-circle"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">List Post</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-borderless" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Branch Name</th>
                                <th>Alamat</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>~
                        <tbody>
                            @foreach ($branchs as $branch)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $branch->nama_sbu }}</td>
                                    <td>{{ $branch->alamat }}</td>
                                    <td>
                                        <div class="d-flex justify-content-around">
                                          
                                            <div>
                                                <a title="Edit Data" href="/branch/{{ $branch->id }}/edit"
                                                    class="btn btn-outline-dark btn-sm">
                                                    Edit
                                                </a>
                                            </div>
                                            <div>
                                                <form action="/branch/{{ $branch->id }}" method="post" id="deleteForm">
                                                    @csrf
                                                    @method('delete')
                                                    <button title="Delete Data" class="btn btn-outline-danger btn-sm"
                                                        onclick="return false" id="deleteButton"
                                                        data-id="{{ $branch->id }}">
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
                    <h5 class="modal-title text-white" id="addNewRecordLabel">Form - Add New post</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="text-white" aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/branch" method="POST" id="formAdd" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="title">Nama SBU</label>
                                    <input type="text" name="nama_sbu" id="title"
                                        class="form-control  @error('nama_sbu') is-invalid @enderror"
                                        value="{{ old('nama_sbu') }}" autofocus autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md mb-3">
                                <label for="deskripsi">Alamat</label>
                                <textarea class="form-control @error('alamat') is-invalid @enderror" id="deskripsi" name="alamat" cols="10"
                                    rows="5">{{ old('deskripsi') }}</textarea>
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
    <script src="/assets/dashboard/vendor/summernote/summernote-bs4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="/assets/dashboard/js/demo/datatables-demo.js"></script>

    <script>
    let formDelete = $('#deleteForm');

        $(document).on('click', '#deleteButton', function(e) {
            e.preventDefault();
            let id = $(this).data('id');
            formDelete.attr('action', `/branch/${id}`)
            Swal.fire({
                title: 'Apakah Anda Yakin?.',
                text: "Anda Ingin menghapus data ini",
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
