@extends('layouts.app')
@section('content')
    <div class="mt-3">
        <h1 class="fs-1 fw-bold text-center">{{$dishes->name}}</h1>
    </div>
    <div class="container">
        <img class="w-100 h-50 mx-auto d-flex align-items-center justify-content-center" src="{{asset($dishes->image_path)}}" alt="">
        <p class="text-center fs-4 fw-semibold my-3">Category : {{$dishes->Category}}</p>
        <p class="text-center fs-4 fw-semibold my-3">Price : {{$dishes->price}} euro</p>
        <p class="text-start fs-4 fw-normal mx-5 my-3">{{$dishes->description}}</p>
    </div>
    @if(Auth::check())
        <div class="ms-auto py-3 px-4 text-center">
            <a href="{{ url('/menu/'.$dishes->id. '/edit')}}" class="btn btn-success"> Edit</a>
            <form action="{{ url('/menu'. '/'.$dishes->id)}}" method="POST">
                @csrf
                @method("DELETE")
                
                <button type="submit" class="btn btn-danger"> Delete</a>
            </form>
        </div>
    @endif

@endsection