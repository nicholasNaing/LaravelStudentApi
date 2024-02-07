<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $tablename = "students";
    protected $primaryKey = "student_id";
    protected $fillable = [
        'name','email','date_of_birth','student_type_id','card_number'
    ];
    public $timestamps = false;
    public function studentType(){
        return $this->belongsTo(StudentType::class,"student_type_id");
    }
    public function studentCard(){
        return $this->hasOne(StudentCard::class,"card_number");
    }
}
