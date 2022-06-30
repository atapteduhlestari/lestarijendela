@extends('layouts.dashboard.master')
@section('title', 'edit-slider')
@push('styles')
    <link href="/assets/dashboard/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endpush
@section('content')

<div class="container-fluid">

    <a href="/banner" class="btn btn-outline-success text-xs mb-3"> 
        <i class="far fa-arrow-alt-circle-left"></i> Back to Table </a>
</div>

<div class="container-fluid">

    

    <div class="card">

        <div class="card-header">
            <h3 class="text-gray-800 text-center">Edit Banner</h3>
        </div>

        <div class="card-body">
            
            <form action="/hightlight-banner/{{$banner->id}}" method="POST" id="formAdd" enctype="multipart/form-data"> 
                @csrf
                <div class="row">
                    <input type="hidden" value="{{$banner->id}}">
                    <div class="col-md-6 mb-3">
                        <label for="category_id">Heading</label>
                        <input type="text" class="form-control @error('heading') is-invalid @enderror" name="heading" value="{{old('heading' ,$banner->heading)}}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="category_id">Images</label>
                        <input type="file" class="form-control @error('url') is-invalid @enderror" name="url" value="{{old('url', $banner->url)}}">
                    </div>
                    <div class="col-md-6 mb-3">
                            <label for="category_id">Description</label>
                            <textarea name="description" id="" class="form-control @error('description') is-invalid @enderror"> {{old('description' ,$banner->description)}} </textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="category_id">Images</label>
                        <div class="card" style="width: 18rem;">
                            <img src="{{ '/storage/' . $banner->url }}" alt="">
                        </div>
                </div>
                </div>
                
                
                <button type="submit" id="btnSubmit" class="btn btn-primary">Submit</button>
            </form>

        </div>

    </div>

</div>


@endsection