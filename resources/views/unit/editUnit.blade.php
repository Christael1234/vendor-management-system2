@extends('layouts.master')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit a Unit</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
            
              <form method="post" action="{{route('unit.update', ['unit' => $unit])}}">
            @csrf
            @method('put')
                <div class="card-body">
                  <div class="form-group">
                    <label>Unit Name</label>
                    <input name="name"  type="name" class="form-control"  placeholder="Enter Unit" value="{{$unit->name}}">
                  </div>
                  <div class="form-group">
                    <label>Description</label>
                    <input name="description" type="text" class="form-control"  placeholder="Enter Description" value="{{$unit->description}}">
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