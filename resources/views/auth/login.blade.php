@extends('layouts.app')

@section('content')
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9 content-login">
                <div class="card o-hidden border-0 p-5 bg-transparent">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image rounded shadow"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-white mb-4"><strong>Login Page</strong></h1>
                                    </div>
                                    <form class="user" method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" name="username" id="username"
                                                class="form-control form-control-user  @error('username') is-invalid @enderror"
                                                placeholder="Username" value="{{ old('username') }}" autofocus>
                                            @error('username')
                                                <span class="invalid-feedback text-xs" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" id="password"
                                                class="form-control form-control-user @error('password') is-invalid @enderror"
                                                placeholder="Password" autocomplete="current-password">
                                            @error('password')
                                                <span class="invalid-feedback text-xs" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <!-- Bootstrap core JavaScript-->
    <script src="/assets/dashboard/vendor/jquery/jquery.min.js"></script>
    <script src="/assets/dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/assets/dashboard/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/assets/dashboard/js/sb-admin-2.min.js"></script>
@endpush
