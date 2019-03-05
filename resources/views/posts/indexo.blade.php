@extends('layouts.app')


@section('content12')

<h1>Posts</h1>

@if(count($posts)>0)

        @foreach ($posts as $post)

        <div >
           
                {{-- {{$post->title}} --}}
                {{-- <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
            <small>written on {{$post->created_at}}</small> --}}
        <ul class="list-group">
    <li class="list-group-item"><a href="/posts/{{$post->id}}"><h3>{{$post->title}}</h3></a>
            <small>written on {{$post->created_at}}</small>
            </li></ul> </div>

        @endforeach
        {{$posts->links()}}

@else
<p><h1> No post found </h1></p>
@endif
@endsection 