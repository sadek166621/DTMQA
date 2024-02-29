<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Studentsignup;


class studentreg extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function course()
    {
        return $this->belongsTo(Course::class,'liketostudy');
    }
    public function code()
    {
        return $this->belongsTo(Studentsignup::class, 'studentId' , 'id');
    }
}
