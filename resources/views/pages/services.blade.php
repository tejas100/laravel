@extends('layouts.app')

@section('content12')
    

<h1>{{$title}}</h1>
       @if(count($servlist)>0)
<ul class="list-group">
       @foreach ($servlist as $serv)
         <li class="list-group-item">{{$serv}}</li>
       @endforeach
</ul>
       @endif

    @endsection