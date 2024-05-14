@extends('layouts.master')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Unit</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
            
              <form id="add-unit-form" method="post" action="{{route('unit.store')}}" >
            @csrf
            @method('post')
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Unit Name</label>
                    <input name="name"  type="name" class="form-control"  placeholder="Enter Unit">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <input name="description" type="text" class="form-control"  placeholder="Enter Description">
                  </div>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" id="add-unit-btn">Add Unit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->


@endsection