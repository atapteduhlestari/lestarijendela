@extends('layouts.dashboard.master')
@section('title', 'Product File')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Product Files</h6>
            </div>
            <div class="card-body">
                <div class="row justify-content-between">
                    <div class="col-md-5 mb-5">
                        <div class="mb-5">
                            <form action="/product-image" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">

                                <div class="form-group mb-3">
                                    <label for="url">Add Image</label>
                                    <div class="custom-file mb-3">
                                        <input type="file" class="custom-file-input @error('url') is-invalid @enderror"
                                            name="url" id="urlImage" accept="image/*">
                                        <label class="custom-file-label imageLabel" for="url">
                                            Choose file...
                                        </label>
                                    </div>
                                </div>


                                <button type="submit" id="btnSubmit" class="btn btn-sm btn-primary">Submit</button>

                            </form>
                        </div>
                        <div class="row">
                            @foreach ($product->images as $image)
                                <div class="col-md-6 mb-3">
                                    <img height="100" class="mb-3" src="{{ '/uploads/' . $image->url }}"
                                        alt="">
                                    <br>
                                    <form action="/product-file/{{ $image->id }}" method="post" id="deleteFormImage">
                                        @csrf
                                        @method('delete')
                                        <button title="Delete Data" class="btn btn-outline-danger btn-sm text-xs"
                                            onclick="return false" id="deleteButtonImage" data-id="{{ $image->id }}">
                                            {{-- <i class="fas fa-trash-alt"></i> --}}Remove
                                        </button>
                                    </form>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="mb-5">
                            <form action="/product-document" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <div class="form-group mb-3">
                                    <label for="url">Add Document</label>
                                    <div class="custom-file mb-3">
                                        <input type="file" class="custom-file-input @error('url') is-invalid @enderror"
                                            name="url" id="urlDocument">
                                        <label class="custom-file-label docLabel" for="url">
                                            Choose file...
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" id="btnSubmit" class="btn btn-sm btn-primary">Submit</button>
                            </form>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>#</th>
                                    <th>Document</th>
                                    <th></th>
                                </tr>
                                @forelse($product->documents as $doc)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <a title="Download File" href="/product-document/download/{{ $doc->id }}">
                                                <i class="fas fa-download"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <form action="/product-file/{{ $doc->id }}" method="post"
                                                id="deleteFormDocument">
                                                @csrf
                                                @method('delete')
                                                <button title="Delete Data" class="btn btn-outline-danger btn-sm text-xs"
                                                    onclick="return false" id="deleteButtonDocument"
                                                    data-id="{{ $doc->id }}">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                @endforelse
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="pills-document" role="tabpanel" aria-labelledby="pills-document-tab">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Product Files</h6>
            </div>
            <div class="card-body">
                <div class="mb-5 p-2">
                    <div class="row">
                        @foreach ($product->documents as $file)
                            <div class="col-md-6 mb-3">
                                <img height="100" class="mb-3" src="{{ '/uploads/' . $file->url }}" alt="">
                                <br>
                                <form action="/product-file/{{ $file->id }}" method="post" id="deleteFormDocument">
                                    @csrf
                                    @method('delete')
                                    <button title="Delete Data" class="btn btn-outline-danger btn-sm text-xs"
                                        onclick="return false" id="deleteButtonDocument" data-id="{{ $file->id }}">
                                        {{-- <i class="fas fa-trash-alt"></i> --}}Remove
                                    </button>
                                </form>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

@endsection
@push('scripts')
    <script>
        let formDeleteImage = $('#deleteFormImage'),
            formDeleteDocument = $('#deleteFormDocument');

        $(document).on('click', '#deleteButtonImage', function(e) {
            e.preventDefault();
            let id = $(this).data('id');
            formDeleteImage.attr('action', `/product-image/${id}`)
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
                    formDeleteImage.submit();
                }
            })
        });

        $(document).on('click', '#deleteButtonDocument', function(e) {
            e.preventDefault();
            let id = $(this).data('id');
            formDeleteDocument.attr('action', `/product-document/${id}`)
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
                    formDeleteDocument.submit();
                }
            })
        });


        $('#urlImage').on('change', function(e) {
            var fileName = $(this).val();
            $(this).next('.imageLabel').html(e.target.files[0].name);
        })

        $('#urlDocument').on('change', function(e) {
            var fileName = $(this).val();
            $(this).next('.docLabel').html(e.target.files[0].name);
        })
    </script>
@endpush
