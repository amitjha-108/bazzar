@extends('base')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="card border-0 shadow-0">
                    <div class="card-body">
                        <form action="{{route('store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="">Title</label>
                                <input type="text" name="title" class="form-control">
                                @error('title')
                                    <p class="text-danger small">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Brand</label>
                                <input type="text" name="brand" class="form-control">
                                @error('brand')
                                    <p class="text-danger small">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Discounted Price</label>
                                <input type="text" name="discount_price" class="form-control">
                                @error('discount_price')
                                    <p class="text-danger small">{{$message}}</p>
                                @enderror
                            </div>
                             <div class="mb-3">
                                <label for="">Price</label>
                                <input type="text" name="price" class="form-control">
                                @error('price')
                                    <p class="text-danger small">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Category</label>
                                <input type="text" name="category" class="form-control">
                                @error('category')
                                    <p class="text-danger small">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Description</label>
                                <input type="text" name="description" class="form-control">
                                @error('description')
                                    <p class="text-danger small">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Image</label>
                                <input type="file" name="image" class="form-control">
                                @error('image')
                                    <p class="text-danger small">{{$message}}</p>
                                @enderror
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div
@endsection