{{-- <h1>{{$title}}</h1> --}}
{{-- @include('shared.notify', ['alertType'=>'red']) --}}
<h1>List post</h1>
<div class="list-post">
    @each('shared.post', $posts, 'post')
</div>