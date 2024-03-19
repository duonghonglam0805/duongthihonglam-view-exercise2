{{-- <h1>{{$title}}</h1> --}}
{{-- @include('shared.notify', ['alertType'=>'red']) --}}
{{-- <h1>List post</h1>
<div class="list-post">
    @each('shared.post', $posts, 'post')
</div> --}}
{{-- <x-todo>
    @foreach($tasks as $key => $task)
        <h3>{{$task['name']}}</h3>
    @endforeach
</x-todo> --}}
@extends('layouts.app')
@section('title', 'Page title')
@section('sidebar')
    {{-- @parent --}}
    <p>This is appended to the master sidebar</p>
@endsection
@section('content')
    <p>This is my body content</p>
@endsection