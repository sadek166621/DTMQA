@extends('admin.layouts.master')
@section('content')
<style>
    /* Style for selected items */
    .select2-container--default .select2-selection--multiple .select2-selection__choice {
        /* Change to your desired background color */
        color: #000;
        /* Change to your desired text color */
        border: 1px solid #0069D9;
        /* Change to your desired border color */
    }

    .select2-container--default .select2-selection--single {
        /* Change to your desired background color */
        height: 38px;
    }

</style>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>@isset($onlineclass) Update @else Add New @endisset Batch </h1>
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
                    @if ($errors->any())
                    @foreach ($errors->all() as $error)
                    <div style="color: red"> {{$error}}</div>
                    @endforeach
                    @endif
                    <form
                        action="@isset($batch){{ route('admin.batch.update', $batch->id) }}@else{{ route('admin.batch.store') }}@endisset"
                        method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="col-sm-4" style="float: left">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Name</label>
                                                <input type="text" name="title" class="form-control"
                                                    id="exampleInputEmail1" placeholder="Enter Batch Name "
                                                    @isset($batch) value="{{ $batch->title }}" @endisset required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-8" style="float: left">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label for="">Teachers</label>
                                                <select class="form-control js-example-basic-single " name="teacher_id"
                                                    required>
                                                    @foreach ($teachers as $teacher)
                                                    @isset($batch)
                                                    <option value="{{ $teacher->id }}" @if($teacher->id ==
                                                        $batch->teacher_id) selected @endif>{{ $teacher->name }}
                                                    </option>
                                                    @else
                                                    <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                                                    @endisset
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label for="">Student</label>
                                            <select class="form-control js-example-basic-multiple" name="student_id[]"
                                                multiple="multiple" required>

                                                @isset($batch)
                                                @foreach ( $students as $student )
                                                <option value="{{ $student->studentId }}" @if(in_array($student->
                                                    studentId,$bids)) selected @endif>{{  $student->name }}</option>
                                                @endforeach
                                                @else
                                                @foreach ($students as $student)
                                                <option value="{{ $student->studentId }}">{{ $student->name }}</option>
                                                @endforeach
                                                @endisset

                                            </select>
                                        </div>
                                    </div>
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
<script>
    $(document).ready(function () {
        $('.js-example-basic-multiple').select2();
    });
    $(document).ready(function () {
        $('.js-example-basic-single').select2();
    });

</script>
@endpush
