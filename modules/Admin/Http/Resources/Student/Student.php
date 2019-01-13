<?php

declare(strict_types=1);

namespace MnkyDevTeam\Admin\Http\Resources\Student;

use Illuminate\Http\Resources\Json\JsonResource;

final class Student extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request) : array
    {
        return [
            'id'                => $this->id,
            'student_id'        => $this->student_id,
            'first_name'        => $this->first_name,
            'middle_name'       => $this->middle_name,
            'last_name'         => $this->last_name,
            'current_college'   => $this->old_college->name,
            'current_course'    => $this->old_course->name,
            'shifting_college'  => $this->new_college->name,
            'shifting_course'   => $this->new_course->name,
            'times_shifted'     => $this->number_times_shifted,
            'shifting_status'   => $this->shifting_status->name,
            'uuid'              => $this->uuid
        ];
    }
}
