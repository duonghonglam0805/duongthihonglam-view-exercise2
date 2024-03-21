@extends('layouts.shop')
@section('sidebar')
    @parent
@endsection
@section('header')
    @include('blocks.header')
@endsection
@section('content')
    @include('contents.shop')
@endsection
@section('css')
    <link rel="stylesheet" href="{{asset('assets/css/header.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/content.css')}}">
@endsection