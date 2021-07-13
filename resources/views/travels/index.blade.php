@extends('layout.app')

@section('title','travels')

@section('content')

<div class="travels row row-cols-1 row-cols-md-2 m-0 p-4">
    @foreach ($travels as $travel)
    <div class="col mb-4">
        <div class="card">
          <img src="{{$travel->img}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{$travel->title}}</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
        </div>
    </div>
    @endforeach
</div>
        
    
{{-- <h2>{{$travel->title}}</h2>
<img src="{{$travel->img}}" alt="">
<h3>{{$travel->desc}}</h3>
<h3>{{$travel->period}}</h3>
<h3>{{$travel->people}}</h3>
<h3>{{$travel->price}}</h3> --}}
@endsection