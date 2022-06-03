@extends('errors::minimal')

@section('title', __('Unauthorized'))
@section('code', '401')
@section('message', __('Unauthorized'))
@section('image')
    <img src="/assets/dashboard/img/undraw_rocket.svg" alt="">
@endsection
