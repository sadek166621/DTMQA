@extends('admin.layouts.master')
@section('content')
<br>
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <!-- /.card-header -->
          <div class="card-body">
            <h2 style="text-align: center; background-color: #D1D2D5;">View Batch</h2>
            <br>
            <h4 >Batch Name: <span style="font-weight: bold"> {{ $batch->title }}</span></h4>
            <h3 >Teacher Name: <span style="font-weight: bold"> {{ $batch->teacher->name }} </span>
            </h3>
            <table  class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>SL</th>
                  <th>Students Name</th>
                </tr>
              </thead>
              <tbody>
                @if (count($students) > 0)
                  @foreach ($students as $key => $student)
                    <tr>
                      <td>{{ $key+1 }}</td>
                      <td>
                       {{ $student->name}}
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
@endpush
