@extends('layouts.dashboard.master')
@section('title', 'FAQ')
@push('styles')
    <link href="/assets/dashboard/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endpush
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">FAQs</h1>
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
                <h6 class="m-0 font-weight-bold text-primary">List FAQS</h6>
            </div>
            <div class="card-body">

                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <?php $row_count = 1; for ($x = 0; $x < count($faqs); $x++) {  ?>

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading<?php echo $faqs; ?>">
                            <h4 class="panel-title">
                                <div class="card">
                                    <div class="card-body">

                                        <a role="button" class="btn btn-link text-dark" data-toggle="collapse"
                                            data-parent="#accordion" href="#collapse<?php echo $row_count; ?>"
                                            aria-expanded="false">
                                            {{ $row_count }} . {{ $faqs[$x]['question'] }}
                                        </a>
                                        <div class="d-flex justify-content">

                                            <a href="/faq/{{ $faqs[$x]['id'] }}/edit"
                                                class="btn btn-outline-dark text-xs">
                                                Edit
                                            </a>
                                            <form action="/faq/{{ $faqs[$x]['id'] }}" method="post" class="d-inline"
                                                id="deleteForm">
                                                @csrf
                                                @method('delete')
                                                <button title="Delete Data" class="btn btn-outline-danger text-xs"
                                                    onclick="return false" id="deleteButton"
                                                    data-id="{{ $faqs[$x]['id'] }}">
                                                    <i class="fas fa-trash-alt"></i> Delete
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </h4>
                        </div>

                        <div id="collapse<?php echo $row_count; ?>" class="panel-collapse collapse " role="tabpanel"
                            aria-labelledby="heading<?php echo $row_count; ?>">
                            <div class="panel-body">
                                <div class="card">
                                    <div class="card-body">

                                        {{ $faqs[$x]['answer'] }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php $row_count++; } ?>
                </div>


        <!-- Modal -->
        <div class="modal fade" id="addNewRecord" data-backdrop="static" data-keyboard="false" tabindex="-1"
            aria-labelledby="addNewRecordLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header bg-gradient-dark">
                        <h5 class="modal-title text-white" id="addNewRecordLabel">Form - Add FAQ</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span class="text-white" aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="/faq" method="POST" id="formAdd" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="">QUESTION</label>
                                    <input type="text" class="form-control @error('question') is-invalid @enderror"
                                        name="question">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="category_id">ANSWER</label>
                                    <textarea type="email" class="form-control @error('answer') is-invalid @enderror" name="answer"> </textarea>
                                </div>

                            </div>

                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" id="btnSubmit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
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
            formDelete.attr('action', `/faq/${id}`)
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
