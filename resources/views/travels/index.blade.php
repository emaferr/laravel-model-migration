@extends('layout.app')

@section('title','travels')

@section('content')
<h1>TRAVELS</h1>
@foreach ($travels as $travel)
<h2>{{$travel->title}}</h2>
@endforeach
@endsection