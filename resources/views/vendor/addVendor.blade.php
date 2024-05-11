@extends('layouts.master')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Vendor</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
            
              <form method="post" action="{{route('vendor.store')}}" >
            @csrf
            @method('post')
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">City</label>
                    <input name="name"  type="name" class="form-control"  placeholder="Enter First Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">State</label>
                    <input name="description" type="text" class="form-control"  placeholder="Enter Description">
                  </div>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Add Address</button>
                </div>
              </form>
            </div>
            <!-- /.card -->


@endsection
