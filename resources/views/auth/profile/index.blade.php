@extends('layouts.dashboard.master')
@section('title', 'User - ' . $user->username)
@push('styles')
    <link href="/assets/dashboard/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endpush

@section('content')

    <div class="container-fluid">
        <div class="card">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Profile - {{ $user->username }}</h6>
            </div>
            <div class="card-body">
                <form action="/dashboard/user/{{ $user->username }}" method="POST" id="formAdd"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="">Name</label>
                            <input type="text" class="form-control  @error('name') is-invalid @enderror" name="name"
                                value="{{ old('name', $user->name) }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="category_id">Email</label>
                            <input type="email" class="form-control" name="email"
                                value="{{ old('email', $user->email) }}">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="title">Username</label>
                            <input type="text" id="title"
                                class="form-control @error('username') is-invalid @enderror"
                                value="{{ old('username', $user->username) }}" disabled>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="title">Password</label>
                            <input type="password" name="password" id="title"
                                class="form-control @error('password') is-invalid @enderror">
                        </div>
                    </div>
                    <button type="submit" id="btnSubmit" class="btn btn-primary"> <i class="fas fa-edit"></i>
                        Update
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
