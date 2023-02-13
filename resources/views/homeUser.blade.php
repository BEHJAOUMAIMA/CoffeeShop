@extends('layouts.app')
@section('content')
<div class="row row-cols-1 row-cols-md-3 g-4 mx-auto my-4" style="width:90%;">
    @foreach ($dishes as $dish)
    <div class="col">
        <div class="card">
        <img src="{{$dish->image_path}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$dish->name}}</h5>
            <p class="">{{$dish->Category}}</p>
            <h5 class="card-title">{{$dish->price}} $</h5>
            <p class="card-text text-truncate">{{$dish->description}}</p>
            <a href="{{ url('/menu/'.$dish->id)}}" class="btn btn-outline-dark">Read more</a>
        </div>
        </div>
    </div>
    @endforeach
</div>

@endsection
