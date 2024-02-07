<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class StudentType extends Model
{
    use HasFactory;
    protected $tablename = 'student_types';
    protected $primaryKey = "student_type_id";
    protected $fillable = [
        "desc"
    ];
    public $timestamps = false;
    public function student(){
        return $this->hasMany(Student::class,"student_type_id");
    }

}
