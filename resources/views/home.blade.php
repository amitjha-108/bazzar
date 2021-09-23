@extends('base')
@section('content')
    <div class="container">
       @foreach ($products as $pro)
       <div class="col-lg-3">
        <div class="card">
            <img src="{{assets('product_image/'. $pro->image)}}" alt="" class="card-img-top">
            <div class="card-body">
                <h2 class="card-title">{{$pro->title}}</h2>
                <h5><del>{{$pro->discount_price}}</del>{{$pro->price}}</h5>
                <button type="button" class="btn btn-success">+</button>
                <span class="counter">0</span>
                <button type="button" class="btn btn-danger">-</button>
            </div>
        </div>
    </div>
       @endforeach
    </div>
@endsection