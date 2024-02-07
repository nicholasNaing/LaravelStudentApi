<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentCard extends Model
{
    use HasFactory;
    protected $tablename = "student_cards";
    protected $primaryKey = "student_id";
    protected $fillable = [
        "student_id","card_number"
    ];
    public $timestamps = false;
    public function student(){
        return $this->belongsTo(Student::class,"card_number");
    }

}
