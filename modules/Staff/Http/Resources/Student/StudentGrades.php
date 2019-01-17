<?php

declare(strict_types=1);

namespace MnkyDevTeam\Staff\Http\Resources\Student;

use Illuminate\Http\Resources\Json\JsonResource;

final class StudentGrades extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'                => $this->id,
            'semester'          => $this->semester,
            'school_year'       => $this->school_year,
            'subject_code'      => $this->subject_code,
            'section'           => $this->section,
            'description'       => $this->description,
            'grade'             => $this->grade,
            'numbers_taken'     => $this->numbers_taken,
            'units'             => $this->units,
            'prerequisite'      => $this->prerequisite,
            'student_id'        => $this->student_id
        ];
    }
}
