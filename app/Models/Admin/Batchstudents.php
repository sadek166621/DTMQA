<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batchstudents extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function student()
    {
        return $this->belongsTo(studentreg::class,'student_id');
    }
    public function batch()
    {
        return $this->belongsTo(Batch::class,'batch_id');
    }

}
