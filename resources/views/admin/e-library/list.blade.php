@extends('admin.layouts.master')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>E-Library List</h1>
        </div>
        <div class="col-sm-6">
          <a href="{{ route('admin.e-library.add') }}" class="btn btn-info float-right">Add New</a>
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
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>SL</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Attachment</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @if (count($librarys) > 0)
                    @foreach ($librarys as $key => $library)
                      <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $library->title }}</td>
                        <td class="text-center">
                          @if($library->image)
                            {{-- <image href="{{ asset('assets/files/uploads/elibrary') }}/{{ $library->library_file }}" ></a> --}}
                             <img src="{{ asset('assets') }}/images/uploads/elibrary/{{ $library->image }}" alt="library image" width="100px" height="100px">
                            @endif
                        </td>
                        <td>
                            @if($library->library_file)
                            <a href="{{ asset('assets/files/uploads/elibrary') }}/{{ $library->library_file }}" target="_blank"><i class="fas fa-download"></i></a>
                          @endif
                        </td>
                        <td>
                            @if ($library->status == 1)
                              <span class="badge bg-success">Active</span>
                            @else
                              <span class="badge bg-danger">Inactive</span>
                            @endif
                          </td>
                        <td>
                          <a href="{{ route('admin.e-library.edit', $library->id) }}" class="btn btn-info"><i class="fas fa-edit"></i> Edit</a>
                          <a href="{{ route('admin.e-library.delete', $library->id) }}" class="btn btn-danger" onclick="if(!confirm('Are You Sure?')){return false}" ><i class="fas fa-trash"></i> Delete</a>
                        </td>
                      </tr>
                    @endforeach
                  @else
                      <td colspan="8" class="text-center">No E-Library Found</td>
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
  <!-- modal description -->
  <div class="modal fade" id="scrollmodal" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="scrollmodalLabel">Notice Description</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div id="noticeDetailsWrapper">

          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!-- end modal description -->
  @endsection
  @push('js')
    {{-- <script>
      function descModalShow(id){
          this.event.preventDefault();
          var description = $('#description'+id).html();
          //alert(description);
          $("#noticeDetailsWrapper").html(description);
          $("#scrollmodal").modal("show");
      }
    </script> --}}
@endpush
