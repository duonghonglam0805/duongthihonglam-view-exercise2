@extends('layouts.admin')
@section('navbar')
  @include('admins.blocks.header')
@endsection
@section('sidebar')
  @include('admins.blocks.sidebar')
@endsection
@section('content')
  @include('admins.contents.dashboard')
@endsection
