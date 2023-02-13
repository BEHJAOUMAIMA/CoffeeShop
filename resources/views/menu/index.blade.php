@extends('layouts.app')

@section('content')

    <div class="container m-auto text-center pt-4">
        <h1 class="text-dark fs-1 fw-bolder">Coffee Shop Menu</h1>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success container fs-6 fw-semibold">
            <p>{{ $message }}</p>
        </div>
    @endif  
    @if(Auth::check() && Auth::user()->isAdmin == 1)
        <div class="container ms-auto py-3 px-4">
            <a href="/menu/create" class="btn btn-outline-dark w-25 py-3 ms-0 ps-0"><i class='bx bx-plus fs-5 fw-bold'></i> <span class="fs-4 fw-bold">Add new dish </span></a>
        </div>
    @endif
    
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