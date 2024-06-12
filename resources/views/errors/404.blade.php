@extends('errors::illustrated-layout')

@section('title', __('Not Found'))
@section('code', '404')
@section('message', __('Not Found'))
@section('image')
    <img style=" max-width: 100%;
  height: auto;" src="/assets/visitor/images/block/illustration-2.svg" alt="">
@endsection
