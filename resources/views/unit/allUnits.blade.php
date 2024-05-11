

@extends('layouts.master')

@section('content')


<div class="card">
              <div class="card-header">
                <h3 class="card-title">All Units</h3>
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
                  @foreach($units->reverse() as $unit)
                 


                  <tr>
                    <td>{{$unit->id}}</td>
                    <td>{{$unit->name}}</td>
                    <td>{{$unit->description}}</td>
                    <td>{{$unit->status}}</td>
                    <td>
              

               <a href="{{ route('unit.edit', ['unit' => $unit]) }}" class="btn btn-primary">Edit</a>
                        <!-- Delete form -->
                        <form id="delete-form-{{$unit->id}}" method="post" action="{{ route('unit.delete', ['unit' => $unit]) }}" class="d-inline">
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
        <a href="{{ route('unit.create', ['unit' => $unit]) }}" class="btn btn-info">Add Unit</a>
</div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

@endsection

              