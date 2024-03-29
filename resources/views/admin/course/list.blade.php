@extends('admin.layouts.master')
@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Course List</h1>
      </div>
      <div class="col-sm-6">
        <a href="{{ route('admin.course.add') }}" class="btn btn-info float-right">Add New</a>
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
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>SL</th>
                  <th>Name</th>
                  <th>Amount</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @if (count($courses) > 0)
                  @foreach ($courses as $key => $course)
                    <tr>
                      <td>{{ $key+1 }}</td>
                      <td>{{ $course->name }}</td>
                      <td>{{ $course->amount }}</td>
                      <td>
                        @if ($course->status == 1)
                          <span class="badge bg-success">Active</span>
                        @else
                          <span class="badge bg-danger">Inactive</span>
                        @endif
                      </td>
                      <td>
                        <a href="{{ route('admin.course.edit', $course->id) }}" class="btn btn-info"><i class="fas fa-edit"></i> Edit</a>
                        <a href="{{ route('admin.course.delete', $course->id) }}"  onclick="if (!confirm('Are you sure?')) { return false }" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</a>
                      </td>
                    </tr>
                  @endforeach
                @else
                    <td colspan="8" class="text-center">No course found</td>
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
    function confirmDelete() {
        // Display a confirmation dialog
        var result = confirm("Are you sure you want to delete?");
        // Check if the user clicked "OK"
    }
</script>
@endpush
