@extends('layouts.master')

@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">All Units</h3>
        
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID 
                        <i class="fas fa-arrow-up sort-icon" id="sort-asc" style="cursor:pointer;"></i>
                        <i class="fas fa-arrow-down sort-icon" id="sort-desc" style="cursor:pointer;"></i>
                    </th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($units->reverse() as $key=>$unit)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$unit->name}}</td>
                    <td>{{$unit->description}}</td>
                    <td>{{$unit->status}}</td>
                    <td>
                        <a href="{{ route('unit.edit', ['unit' => $unit]) }}" class="btn btn-primary">Edit</a>
                        <!-- Delete form -->
                        <form id="delete-form-{{$unit->id}}" method="post" action="{{ route('unit.delete', ['unit' => $unit]) }}" class="d-inline delete-unit-form">
    @csrf
    @method('delete')
    <button type="button" class="btn btn-danger delete-unit-btn">Delete</button>
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

@section('scripts')
<script>
  $(function () {
    var table = $("#example1").DataTable({
      "responsive": true, 
      "lengthChange": false, 
      "autoWidth": false,
      "buttons": ["copy", "pdf", "print"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

    

    $('#sort-asc').on('click', function() {
        table.order([0, 'asc']).draw();
    });

    $('#sort-desc').on('click', function() {
        table.order([0, 'desc']).draw();
    });
  });
</script>
@endsection
