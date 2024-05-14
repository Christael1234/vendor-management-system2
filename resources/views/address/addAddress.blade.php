@extends('layouts.master')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Address</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
            
              <form id="add-address-form" method="post" action="{{route('address.store')}}" >
            @csrf
            @method('post')
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input name="Address"  type="name" class="form-control"  placeholder="Enter Address">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">state</label>
                    <input name="State"  type="name" class="form-control"  placeholder="Enter State">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">city</label>
                    <input name="City" type="text" class="form-control"  placeholder="Enter City">
                  </div>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" id="add-address-btn">Add Address</button>
                </div>
              </form>
            </div>
            <!-- /.card -->


@endsection
