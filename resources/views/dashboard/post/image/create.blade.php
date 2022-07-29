@extends('layouts.dashboard.master')
@section('title', 'Post Image')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Post Images</h6>
            </div>
            <div class="card-body">
                <div class="mb-5 p-2">
                    <div class="row">
                        @foreach ($post->images as $image)
                            <div class="col-md-6 mb-3">
                                <img height="100" class="mb-3" src="{{ '/uploads/' . $image->url }}" alt="">
                                <br>
                                <form action="/post-image/{{ $image->id }}" method="post" id="deleteForm">
                                    @csrf
                                    @method('delete')
                                    <button title="Delete Data" class="btn btn-outline-danger btn-sm" onclick="return false"
                                        id="deleteButton" data-id="{{ $image->id }}">
                                        {{-- <i class="fas fa-trash-alt"></i> --}}Remove
                                    </button>
                                </form>
                            </div>
                        @endforeach
                    </div>
                </div>
                <form action="/post-image" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="url">Add Image</label>
                            <div class="custom-file mb-3">
                                <input type="file" class="custom-file-input @error('url') is-invalid @enderror"
                                    name="url" id="url" accept="image/*">
                                <label class="custom-file-label" for="url">Choose file...</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <button type="submit" id="btnSubmit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

@endsection
@push('scripts')
    <script>
        let formDelete = $('#deleteForm');

        $(document).on('click', '#deleteButton', function(e) {
            e.preventDefault();
            let id = $(this).data('id');
            formDelete.attr('action', `/post-image/${id}`)
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


        $('#url').on('change', function(e) {
            var fileName = $(this).val();
            $(this).next('.custom-file-label').html(e.target.files[0].name);
        })
    </script>
@endpush
