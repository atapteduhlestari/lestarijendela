@extends('layouts.dashboard.master')
@section('title', 'Feedback | Lestari Jendela')
@push('styles')
    <link href="/assets/dashboard/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endpush
@section('content')

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h3 class="text-center">List Feedback</h3>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Email</th>
                            <th>Description</th>
                            
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($feedbacks as $feedback)
                               <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{$feedback->email}}</td>
                                <td>{{$feedback->description}}</td>
                                <td>
                                    <div class="d-flex justify-content-around">

                                        <div>
                                            <a title="Detail Data" href="/feedback/{{$feedback->id}}/detail"
                                                class="btn btn-outline-primary text-xs"> Detail </a>
                                        </div>
                                        <div>

                                            <form action="/feedback-delete/{{$feedback->id}}" method="post" id="deleteForm">
                                                @csrf
                                                @method('delete')
                                                <button title="Delete Data" class="btn btn-outline-danger text-xs"
                                                    onclick="return false" id="deleteButton"
                                                    data-id="{{$feedback->id}}">
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
            formDelete.attr('action', `/feedback-delete/${id}`)
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