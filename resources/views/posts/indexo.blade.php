@extends('layouts.app')


@section('content12')

<h1>Posts</h1>

@if(count($posts)>1)

        @foreach ($posts as $post)

        <div class="well" >
            <h3>
                {{-- {{$post->title}}
            <small>written on {{$post->created_at}}</small> --}}
                <ul class="list-group">
                    <li class="list-group-item">{{$post->title}}
                   <small>written on {{$post->created_at}}</small> 
                    </li>
            </ul>

        </h3>
        </div>

        @endforeach

@else
<p><h1> No post found </h1></p>
@endif
@endsection 