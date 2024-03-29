@extends('admin.layouts.master')
@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Batch List</h1>
      </div>
      <div class="col-sm-6">
        <a href="{{ route('admin.batch.add') }}" class="btn btn-info float-right">Add New</a>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <!-- /.card-header -->
          <div class="card-body">
            <table id="myTable" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>SL</th>
                  <th>Title</th>
                  <th>Teachers Name</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @if (count($batches) > 0)
                  @foreach ($batches as $key => $batch)
                    <tr>
                      <td>{{ $key+1 }}</td>
                      <td>
                        {{ $batch->title }}
                      </td>
                      <td>
                       {{ $batch->teacher->name }}
                      </td>
                      <td>
                        <a href="{{ route('admin.batch.edit', $batch->id) }}" class="btn btn-info"><i class="fas fa-edit"></i> Edit</a>
                        <a href="{{ route('admin.batch.view', $batch->id) }}" class="btn btn-success"><i class="fas fa-eye"></i> View</a>
                        <a href="{{ route('admin.batch.delete', $batch->id) }}" onclick="if (!confirm('Are you sure?')) { return false }" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</a>
                      </td>
                    </tr>
                  @endforeach
                @else
                    <td colspan="4" class="text-center">No Batches found</td>
                @endif
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>

@endsection
@push('js')
<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
<script>
    function confirmDelete() {
        // Display a confirmation dialog
        var result = confirm("Are you sure you want to delete?");
        
        // Check if the user clicked "OK"
        if (result) {
            // Perform the delete operation or redirect to the delete route
            // Example: window.location.href = '/delete';
            alert("Deleted!");
        } else {
            // The user clicked "Cancel" or closed the dialog
            alert("Deletion canceled!");
        }
    }
</script>
@endpush
