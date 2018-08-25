@extends('layouts.app')

@section('content')
<h2>{{$title}}</h2>
<p>This is the services page</p>
    @if(count($services) >0)
        <ul class="list-group">
            @foreach($services as $service)
                <li class="list-group-item">{{$service}}</li>
            @endforeach
        </ul>
    @endif
@endsection