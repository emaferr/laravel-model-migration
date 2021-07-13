@extends('layout.app')

@section('title','travels')

@section('content')
<h1>TRAVELS</h1>
@foreach ($travels as $travel)
<h2>{{$travel->title}}</h2>
<h3>{{$travel->desc}}</h3>
<h3>{{$travel->period}}</h3>
<h3>{{$travel->people}}</h3>
<h3>{{$travel->price}}</h3>
@endforeach
@endsection