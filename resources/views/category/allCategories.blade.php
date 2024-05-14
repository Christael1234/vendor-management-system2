@extends('layouts.master')

@section('content')


<div class="card">
              <div class="card-header">
                <h3 class="card-title">All Categories</h3>
              </div>
              <div>
         
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
                  @foreach($categories->reverse() as $category)
                 


                  <tr>
                    <td>{{ucfirst(strtolower($category->id))}}</td>
                    <td>{{ucfirst(strtolower($category->name))}}</td>
                    <td>{{ucfirst(strtolower($category->description))}}</td>
                    <td>{{ucfirst(strtolower($category->status))}}</td>
                    
                    <td>
              

               <a href="{{ route('category.edit', ['category' => $category]) }}" class="btn btn-primary">Edit</a>
                        <!-- Delete form -->
                        <form id="delete-form-{{$category->id}}" method="post" action="{{ route('category.delete', ['category' => $category]) }}" class="d-inline delete-category-form">
    @csrf
    @method('delete')
    <button type="button" class="btn btn-danger delete-category-btn">Delete</button>
</form>
                      
              
                 

                    </td>

                  </tr>
                  @endforeach

            
                </tbody>
                
                </table>
              
              <br>
        
              <a href="{{ route('category.create', ['category' => $category]) }}" class="btn btn-info">Add Category</a>
</div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

@endsection



              
