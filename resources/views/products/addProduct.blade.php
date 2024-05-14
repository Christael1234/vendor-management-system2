@extends('layouts.master')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Products</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
              <form id="add-product-form" method="post" action="{{route('product.store')}}" >
            @csrf
            @method('post')

           
            
                  <div class="card-body">
    <div class="form-group">
        <label for="name">Name*</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="Enter Product Name" required>
    </div>


                  
                <div class="col-sm-5">
                      <!-- select -->
                      <div class="form-group">
                        <label>Select Brand</label>
                        <select name="brand_id" type="text" class="form-control" required>
                        <option >--</option>
                        @foreach ($brands as $brand)
                          <option >{{ucfirst(strtolower($brand -> name))}}</option>
                          
                        @endforeach
                        </select>
                      </div>
                    </div>

                    <div class="col-sm-5">
                    <div class="form-group">
                        <label>Select Category</label>
                        <select name="category_id" type="text" class="form-control" required>
                        <option >--</option>
                        @foreach ($categories as $category)
                        <option >{{ucfirst(strtolower($category -> name))}}</option>
                          
                        @endforeach
                        </select>
                      </div>
</div>
                    
                    <div class="col-sm-5">
                    <div class="form-group">
                        <label>Select Unit</label>
                        <select name="unit_id" type="text" class="form-control" required>
                        <option >--</option>
                        @foreach ($units as $unit)
                        <option >{{$unit -> name}}</option>
                          
                        @endforeach
                        </select>
                      </div>
</div>
               
                  
              
              
          
                  <div class="form-group">
                    <label>Price</label>
                    <input  class="form-control" type="text" name="price"  placeholder="Enter Product Price" required>
                  </div>
                  <div class="form-group">
                    <label>Qty</label>
                    <input type="text" name="qty" class="form-control" placeholder="Enter Product Quantity" required>
                  </div>
                  <div class="form-group">
                    <label>Description</label>
                    <input type="text"  name="description" class="form-control"  placeholder="Enter Product Description" >
                  </div>
                  
                  </div>
                  
                
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" id="add-product-btn">Add Product</button>
                </div>
              </form>
            </div>
            <!-- /.card -->


@endsection