@extends('layouts.master')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit a Product</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
            
              <form method="post" action="{{route('product.update', ['product' => $product])}}">
            @csrf
            @method('put')
          
                <div class="card-body">
                  <div class="form-group">
                    <label>Product Name</label>
                    <input name="name"  type="name" class="form-control"  placeholder="Enter Product Name" value="{{$product->name}}">
                  </div>

                  <div class="col-sm-5">
                      <!-- select -->
                      <div class="form-group">
                        <label>Select Brand</label>
                        <select name="brand_id" type="text" class="form-control">
                          
                        <option selected >{{$product->brand_id}}</option>
                        
                        @foreach ($brands as $brand)
                          <option >{{$brand -> name}}</option>
                        @endforeach
                        </select>
                      </div>
                    </div>

                    <div class="col-sm-5">
                    <div class="form-group">
                        <label>Select Category</label>
                        <select name="category_id" type="text" class="form-control">
                        <option selected>{{$product->category_id}} </option>
                        @foreach ($categories as $category)
                          <option >{{$category -> name}}</option>
                        @endforeach
                        </select>
                      </div>
</div>

<div class="col-sm-5">
                    <div class="form-group">
                        <label>Select Unit</label>
                        <select name="unit_id" type="text" class="form-control">
                        <option selected>{{$product->unit_id}}</option>
                        @foreach ($units as $unit)
                          <option >{{$unit -> name}}</option>
                        @endforeach
                        </select>
                      </div>

</div>
                      

                      <div class="form-group">
                    <label>Quantity</label>
                    <input name="qty"  type="number" class="form-control"  placeholder="Enter Product Quantity" value="{{$product->qty}}">
                  </div>

                
                  <div class="form-group">
                    <label>Price</label>
                    <input name="price"  type="name" class="form-control"  placeholder="Enter Product price" value="{{$product->price}}">
                  </div>



                  <div class="form-group">
                    <label>Description</label>
                    <input name="description" type="text" class="form-control"  placeholder="Enter Description" value="{{$product->description}}">
                  </div>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">update</button>
                </div>
              </form>
            </div>
            <!-- /.card -->


@endsection