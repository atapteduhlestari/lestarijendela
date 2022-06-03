@extends('errors::minimal')

@section('title', __('Service Unavailable'))
@section('code', '503')
@section('message', __('Service Unavailable'))
@section('image')
    <img src="/assets/dashboard/img/undraw_rocket.svg" alt="">
@endsection
