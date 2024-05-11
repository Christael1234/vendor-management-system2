@extends('layouts.master')

@section('content')


<div class="card">
              <div class="card-header">
                <h3 class="card-title">All Brands
                </h3>
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
                  @foreach($brands->reverse() as $brand)


                  <tr>
                    <td>{{$brand->id}}</td>
                    <td>{{$brand->name}}</td>
                    <td>{{$brand->description}}</td>
                    <td>{{$brand->status}}</td>
                    <td>
               
               <a href="{{ route('brand.edit', ['brand' => $brand]) }}" class="btn btn-primary">Edit</a>
                        <!-- Delete form -->
                        <form id="delete-form-{{$brand->id}}" method="post" action="{{ route('brand.delete', ['brand' => $brand]) }}" class="d-inline">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger swaldDefaultSuccess">Delete</button>
                        </form>
              
                 


                 

                    </td>

                  </tr>
                  @endforeach

            
                </tbody>
                
                </table>
                <br>
        <a href="{{ route('brand.create', ['brand' => $brand]) }}" class="btn btn-info">Add Brand</a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

@endsection

              
