@extends('layouts.master')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Brand</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
            
              <form method="post" action="{{route('brand.store')}}" >
            @csrf
            @method('post')
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Brand Name</label>
                    <input name="name"  type="name" class="form-control"  placeholder="Enter Brand">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <input name="description" type="text" class="form-control"  placeholder="Enter Description">
                  </div>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary swalaDefaultSuccess">Add Brand</button>
                </div>
              </form>
            </div>
            <!-- /.card -->


@endsection
