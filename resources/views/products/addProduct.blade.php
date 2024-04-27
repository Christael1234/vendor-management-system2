@extends('layouts.master')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Products</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
              <form method="post" action="{{route('product.store')}}" >
            @csrf
            @method('post')

           
                <div class="card-body">
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter Product Name">
                  </div>
                  <div class="form-group">
                    <label>Price</label>
                    <input  class="form-control" type="text" name="price"  placeholder="Enter Product Price">
                  </div>
                  <div class="form-group">
                    <label>Qty</label>
                    <input type="text" name="qty" class="form-control" placeholder="Enter Product Quantity">
                  </div>
                  <div class="form-group">
                    <label>Description</label>
                    <input type="text"  name="description" class="form-control"  placeholder="Enter Product Description">
                  </div>
                  
                  </div>
                  
                
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Save Product</button>
                </div>
              </form>
            </div>
            <!-- /.card -->


@endsection