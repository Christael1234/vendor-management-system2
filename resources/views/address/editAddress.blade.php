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
            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
     @endif
                <div class="card-body">
                  <div class="form-group">
                    <label>Address</label>
                    <input name="Address"  type="name" class="form-control"  placeholder="Enter Brand" value="{{$address->Address}}">
                  </div>
                  <div class="form-group">
                    <label>State</label>
                    <input name="State" type="text" class="form-control"  placeholder="Enter Description" value="{{$address->State}}">
                  </div>
                  <div class="form-group">
                    <label>City</label>
                    <input name="City"  type="name" class="form-control"  placeholder="Enter Brand" value="{{$address->City}}">
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