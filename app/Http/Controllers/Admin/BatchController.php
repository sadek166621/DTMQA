<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Teacher;
use App\Models\Admin\Student;
use App\Models\Admin\Batch;
use App\Models\Admin\Batchstudents;
use Toastr;
use Session;
use DB;


class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['batches'] = Batch::latest()->get();
       return view('admin.batch.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['teachers'] = Teacher::latest()->get();
        $data['students'] = Student::all();
        return view('admin.batch.form',$data);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $validated = $request->validate([
            'title' => 'required',
            'student_id' => 'required',
            'teacher_id' => 'required',
        ]);

        $batch = Batch::create([
            'title' => $request->title,
            'teacher_id' => $request->teacher_id
        ]);

        Session::put('batch_id', $batch->id);
        if ($students=$request->student_id ){
                foreach ($students as $student){
                    $batchstudents = new Batchstudents();
                    $batchstudents->batch_id = Session::get('batch_id');
                    $batchstudents->student_id = $student;
                    $batchstudents->save();
                }
            }

        Toastr::success('Batch added successfully!', 'Success', ["positionClass" => "toast-top-right"]);

        return redirect()->route('admin.batch.list');
        // return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['batch'] = Batch::find($id)->latest()->first();
        $data['students'] = DB::table('batchstudents')
        ->join('students', 'students.id', '=', 'batchstudents.student_id')
        ->select('students.first_name','students.last_name')
        ->where('batchstudents.batch_id', $id)
        ->get();

        return view('admin.batch.view',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
   {
        // $data['teachers'] = Teacher::latest()->get();
        // $data['students'] = Student::all();
        // $data['batch'] = Batch::find($id);
        // // $data['bstudents'] = DB::table('batches')
        // // ->join('batchstudents', 'batchstudents.student_id', '=', 'batches.id')
        // // ->select('batchstudents.student_id')
        // // ->where('batchstudents.batch_id', $id)
        // // ->get();
        // $bstudents = Batchstudents::where('batch_id', $id)->get();

        // return view('admin.batch.form',$data, compact('bstudents'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
