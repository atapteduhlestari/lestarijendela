@extends('layouts.dashboard.master')
@section('title', 'Highlight-slider')
@push('styles')
    <link href="/assets/dashboard/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endpush
@section('content')

 <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Highlight Slider</h1>
    <div class="my-4">
        <div class="d-flex">
            <div class="flex-grow-1">
                <button class="btn btn-primary btn-sm flex-grow-1" type="button" data-toggle="modal"
                    data-target="#addNewRecord">
                    Add <i class="fas fa-plus-circle"></i>
                </button>
            </div>
            <a href="/banner" class="btn btn-info btn-sm mr-1">
                Banners
            </a>
            {{-- <a href="/product-sub-category" class="btn btn-success btn-sm">
                Sub Category
            </a> --}}
        </div>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">List Product</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Heading</th>
                            <th>Description</th>
                            <th>Images</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($sliders as $slider)
                          
                     
                               <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{$slider->heading}}</td>
                                <td>{{$slider->description}}</td>
                                <td><img class="col-md-2" src="{{ '/storage/' . $slider->url }}" alt=""> </td>
                                <td>
                                    <div class="d-flex justify-content-around">

                                        <div>
                                            <a title="Detail Data" href="/highlight/{{$slider->id}}/detail"
                                                class="btn btn-outline-primary text-xs"> Detail </a>
                                        </div>

                                        <div>
                                            <a title="Edit Data" href="/hightlight-slider/{{$slider->id}}/edit"
                                                class="btn btn-outline-dark text-xs">Edit</a>
                                        </div>

                                      
                                        <div>
                                            <form action="/hightlight-slider/{{$slider->id}}" method="post" id="deleteForm">
                                                @csrf
                                                @method('delete')
                                                <button title="Delete Data" class="btn btn-outline-danger text-xs"
                                                    onclick="return false" id="deleteButton"
                                                    data-id="{{$slider->id}}">
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
                <h5 class="modal-title text-white" id="addNewRecordLabel">Form - Add New Slider</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="text-white" aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/hightlight-slider" method="POST" id="formAdd" enctype="multipart/form-data"> 
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="category_id">Heading</label>
                            <input type="text" class="form-control @error('heading') is-invalid @enderror" name="heading" value="{{old('heading')}}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="category_id">Images</label>
                            <input type="file" class="form-control @error('url') is-invalid @enderror" name="url" value="{{old('url')}}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="category_id">Description</label>
                                <textarea name="description" id="" class="form-control @error('description') is-invalid @enderror">{{old('description')}}</textarea>
                            </div>
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
            formDelete.attr('action', `/hightlight-slider/${id}`)
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