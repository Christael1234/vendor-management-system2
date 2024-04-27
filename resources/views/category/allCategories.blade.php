
@extends('layouts.master')

@section('content')


<div class="card">
              <div class="card-header">
                <h3 class="card-title">All Categories</h3>
                <div>
         <a href="{{route('category.create')}}">Create a Category</a>
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
                  @foreach($categories as $category)


                  <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <td>{{$category->description}}</td>
                    <td>{{$category->status}}</td>
                    <td>
               <a href="{{route('category.edit', ['category' => $category])}}" class="d-inline">Edit</a>
            


                  
                    <form method="post" action="{{route('category.delete', ['category' => $category ])}}" class="d-inline">
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

              
