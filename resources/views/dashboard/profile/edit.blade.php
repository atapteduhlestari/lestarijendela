@extends('layouts.dashboard.master')
@section('title', 'Profile')
@push('styles')
    <link href="/assets/dashboard/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endpush

@section('content')

<div class="container">

    <a href="/profile" class="btn btn-success mb-3"> back Table</a>
</div>

<div class="container">

    <div class="card">
    <div class="card-header">
        <h3 class="text-center">Edit Profile</h3>
    </div>

    <div class="card-body">

        <form action="/profile/{{$profile->id}}" method="POST" id="formAdd" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="">Profile Name</label>
                   <input type="text" class="form-control  @error('name') is-invalid @enderror" 
                   name="name" value="{{ old('name' ,$profile->name)}}" >
                </div>
                <div class="col-md-6 mb-3">
                    <label for="category_id">Email</label>
                   <input type="email" class="form-control" name="email" value="{{ old('email' ,$profile->email)}}" >
                </div>
                <div class="col-md-6">
                        <label for="title">Telfon</label>
                        <input type="text" name="no_tlp" id="title" class="form-control" value="{{ old('no_tlp' ,$profile->no_tlp)}}" >
                </div>

                <div class="col-md-6">
                    <label for="title">Address</label>
                    <input type="text" name="address" id="title" class="form-control" value="{{ old('address' ,$profile->address)}}" >
            </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="deskripsi">deskripsiription</label>
                    <textarea class="form-control" id="deskripsi" name="description" cols="10"
                        rows="5">{{ old('description' ,$profile->description) }}</textarea>
                </div>
            </div>
            <button type="submit" id="btnSubmit" class="btn btn-primary">Update</button>
        </form>

    </div>
 
    </div>
</div>



@endsection

