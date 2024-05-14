

@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Product Details</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                       
                        <div class="col-md-6">
                            <p><strong>Name:</strong> {{$product->name}}</p>
                            <p><strong>Brand:</strong> {{$product->brand_id}}</p>
                            <p><strong>Category:</strong> {{$product->category_id}}</p>
                            <p><strong>Price:</strong> <i class="fa-solid fa-naira-sign"></i>{{$product->price}}</p>
                            <p><strong>Quantity Ordered:</strong> {{$product->qty}}  {{$product->unit_id }}</p>
                            <p><strong>Product Description</strong> {{$product->description}}</p>

                           
                            <p><strong>Total:</strong> <i class="fa-solid fa-naira-sign"></i>{{ $product->price * $product->qty }}</p>
                          

                          
                            
                            <a href="{{ route('allP.show', ['product' => $product]) }}" class="btn btn-secondary">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
