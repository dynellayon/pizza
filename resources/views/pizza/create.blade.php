@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-4">
            <div class="card">
                <div class="card-header">Menu</div>

                <div class="card-body">
                    <ul class="list-group">
                    <a href="{{route('pizza.index')}}" class="list-group-item list-group-item-action">View</a>
                    <a href="{{route('pizza.create')}}" class="list-group-item list-group-item-action">Create</a>
                    </ul>
                
                </div>
            </div>
        @if (count($errors)>0)
        <div class="card mt-5">
            <div class="card-body">
        
             <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                   <p> {{$error}}</p>
                @endforeach
                </div>
           
            </div>
        </div>@endif
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pizza</div>
           
            <form action="{{route('pizza.store')}}" method="post" enctype="multipart/form-data">@csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Name of pizza</label>
                        <input type="text" class="form-control" name="name" placeholder="Name of Pizza">
                    </div>
                    <div class="form-group">
                        <label for="description">Description of pizza</label>
                        <textarea class="form-control" name="description"></textarea>
                    </div>
                    <div class="form-inline">
                        <label>Pizza Price(₱)</label>
                        <input type="number" name="small_pizza_price" class="form-control"  placeholder="small pizza price">
                        <input type="number" name="medium_pizza_price" class="form-control"  placeholder="medium pizza price">
                        <input type="number" name="large_pizza_price" class="form-control"  placeholder="Large pizza price">
                    </div>
                    <div class="form-group">
                        <label for="description">category</label>
                        <select class="form-control" name="category"> 
                            <option value=""></option>
                            <option value="Vegetarian">Vegetarian Pizza</option>
                            <option value="nonvegetarian">Non-Vegitarian Pizza</option>
                            <option value="traditional">Traditional</option>
                            
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control" name="image" >
                    </div>
                    <div class="form-group text-center">
                        <button class="btn btn-primary">Save</button>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</div>
@endsection
