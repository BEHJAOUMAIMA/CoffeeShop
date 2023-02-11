@extends('layouts.app')


@section('content')
    <div class="container m-auto text-center pt-4">
        <h1 class="text-dark fs-1 fw-bolder">Coffee Shop Menu</h1>
        <h3>Add a new dish in the menu</h3>
    </div>
    <div class="container w-50 m-auto pt-4">
        <form action="/menu" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="formFile" class="form-label">Select an image to upload :</label>
                <input class="form-control" name="dishImage" type="file" id="formFile">
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="dishName" class="form-control" id="name">
            </div>
            
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" name="dishPrice" class="form-control" id="price">
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <input type="text"  name="dishCategory" class="form-control" id="category">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control"  name="dishDescription" id="description" rows="3"></textarea>
            </div> 
            <a href="/menu"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Exit</button></a>
            <button type="submit" class="btn btn-primary">Add Dish</button>
        </form>
    </div>

@endsection