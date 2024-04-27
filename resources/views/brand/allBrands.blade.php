@extends('layouts.master')

@section('content')


<div class="card">
              <div class="card-header">
                <h3 class="card-title">All Categories</h3>
                <div>
         <a href="{{route('brand.create')}}">Create a Category</a>
      </div>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Actions<th>
                    
                   

                  </tr>
 </thead>
                  <tbody>
                  @foreach($brands as $brand)


                  <tr>
                    <td>{{$brand->id}}</td>
                    <td>{{$brand->name}}</td>
                    <td>{{$brand->description}}</td>
                    <td>{{$brand->status}}</td>
                    <td>
               <a href="{{route('brand.edit', ['brand' => $brand])}}" class="d-inline">Edit</a>
            


                  
                    <form method="post" action="{{route('brand.delete', ['brand' => $brand ])}}" class="d-inline">
                  @csrf
                  @method('delete')
                  <input type="submit" value="Delete"/>
               </form>

                 

                    </td>

                  </tr>
                  @endforeach

            
                </tbody>
                
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

@endsection

              
