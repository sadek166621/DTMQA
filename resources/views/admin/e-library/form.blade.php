@extends('admin.layouts.master')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>@isset($notice) Update @else Add New @endisset E-Library</h1>
      </div>

    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
          <!-- /.card-header -->
          <!-- form start -->
          <form action="@isset($librarys){{ route('admin.e-library.update', $librarys->id) }}@else{{ route('admin.e-library.store') }}@endisset"
            method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter title" @isset($librarys) value="{{ $librarys->title }}" @endisset required>
              </div>
              <div class="row">
                <div class="col-sm-12">
                    <div class="col-sm-4" style="float: left">
                        <div class="form-group">
                          <label for="exampleInputFile">
                            @isset($librarys)
                              @if($librarys->image)
                                Change Image (previous file: <img src="{{ asset('assets') }}/images/uploads/elibrary/{{ $librarys->image }}" alt="e-library image" width="50px" height="50px">)
                              @endif
                            @else
                              Import Image
                            @endisset
                          </label>
                          <div class="input-group">
                            <div class="custom-file">
                              <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                            </div>
                            @error('image')
                                <div class="invalid-feedback" style="display: inline-block">{{ $message }}</div>
                            @enderror
                          </div>
                        </div>
                      </div>
                  <div class="col-sm-4" style="float: left">
                    <div class="form-group">
                      <label for="exampleInputFile">
                        @isset($librarys)
                          @if($librarys->library_file)
                            Change Notice File (previous file:  <a href="{{ asset('assets/files/uploads/elibrary') }}/{{ $librarys->library_file }}" target="_blank"><i width="50px" height="50px" class="fas fa-download"></i></a>)
                          @endif
                        @else
                          Import Notice File
                        @endisset
                      </label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" name="library_file" class="form-control @error('notice_file') is-invalid @enderror">
                        </div>
                        @error('notice_file')
                            <div class="invalid-feedback" style="display: inline-block">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                  </div>

                </div>
              </div>
              <div class="" style="float: left">
                <div class="form-check mt-3" style="margin-left: 8px;">
                  <input type="checkbox" name="status" class="form-check-input" id="exampleCheck1" @isset($notice) @if($notice->status == 1) checked @endif @else checked @endisset>
                  <label class="form-check-label" for="exampleCheck1">Active</label>
                </div>
              </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary float-right">Submit</button>
            </div>
          </form>
        </div>
        <!-- /.card -->
      <!--/.col (right) -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection

@push('js')
<script>
     $(document).ready(function () {
        $('#description').summernote();
     });
</script>
@endpush
