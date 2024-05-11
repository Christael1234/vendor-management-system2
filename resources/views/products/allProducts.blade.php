

              


@extends('layouts.master')

@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">All Products</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example2" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Brand</th>
                    <th>Category</th>
                   
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products->reverse() as $product) <!-- Reverse the order of $products array -->
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->brand_id}}</td>
                    <td>{{$product->category_id}}</td>
                  
                    <td>{{$product->price}}</td>
                    <td>{{$product->qty}}</td>
                    <td>
                        <a href="{{ route('product.edit', ['product' => $product]) }}" class="btn btn-primary">Edit</a>
                        <!-- Delete form -->
                        <form id="delete-form-{{$product->id}}" method="post" action="{{ route('product.delete', ['product' => $product]) }}" class="d-inline">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger swaldDefaultSuccess">Delete</button>
                        </form>
                        <!-- View button -->
                        <a href="{{ route('product.details', ['product' => $product]) }}" class="btn btn-info ">View</a>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
        <br>
        <a href="{{ route('product.create', ['product' => $product]) }}" class="btn btn-info">Add Product</a>
    </div>
    <!-- /.card-body -->
    
</div>
<!-- /.card -->

@endsection


