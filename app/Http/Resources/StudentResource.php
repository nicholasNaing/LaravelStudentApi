<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "name"=>$this->name,
            "email"=>$this->email,
            "age"=>$this->age,
            "date_of_birth"=>$this->date_of_birth,
            "student_type_id"=>$this->student_type_id
        ];
    }
}
