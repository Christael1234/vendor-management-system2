@extends('layouts.master')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit an Address</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
            
              <form method="post" action="{{route('address.update', ['address' => $address])}}">
            @csrf
            @method('put')
                <div class="card-body">
                  <div class="form-group">
                    <label>State</label>
                    <input name="name"  type="name" class="form-control"  placeholder="Enter Brand" value="{{$address->state}}">
                  </div>
                  <div class="form-group">
                    <label>Description</label>
                    <input name="description" type="text" class="form-control"  placeholder="Enter Description" value="{{$address->city}}">
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