@extends('layouts.master')

@section('content')


<div class="card">
              <div class="card-header">
                <h3 class="card-title">All Addresses</h3>
                <div>
    
      </div>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Address</th>
                    <th>State</th>
                    <th>City</th>
                    <th>Actions<th>
                    
                   

                  </tr>
 </thead>
                  <tbody>
                  @foreach($addresses as $address)


                  <tr>
                    <td>{{$address->id}}</td>
                    <td>{{ucfirst(strtolower($address->Address))}}</td>
                    <td>{{ucfirst(strtolower($address->State))}}</td>
                    <td>{{ucfirst(strtolower($address->City))}}</td>
                  
                    <td>
               
            


                  

               
               <a href="{{ route('address.edit', ['address' => $address]) }}" class="btn btn-primary">Edit</a>
                        <!-- Delete form -->
                        <form id="delete-form-{{$address->id}}" method="post" action="{{ route('address.delete', ['address' => $address]) }}" class="d-inline">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger toastrdDefaultSuccess">Delete</button>
                        </form>
              
                 

                 

                    </td>

                  </tr>
                  @endforeach

            
                </tbody>
                
                </table>
                <br>
        <a href="{{ route('address.create', ['address' => $address]) }}" class="btn btn-info">Add Address</a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

@endsection

              
