@extends('layouts.master')

@section('content')


<div class="card">
              <div class="card-header">
                <h3 class="card-title">All Addresses</h3>
                <div>
         <a href="{{route('address.create')}}">Create a Category</a>
      </div>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>State</th>
                    <th>City</th>
                    <th>Actions<th>
                    
                   

                  </tr>
 </thead>
                  <tbody>
                  @foreach($addresses as $address)


                  <tr>
                    <td>{{$address->id}}</td>
                    <td>{{$address->state}}</td>
                    <td>{{$address->city}}</td>
                    <td>
               <a href="{{route('address.edit', ['address' => $address])}}" class="d-inline">Edit</a>
            


                  
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

              
