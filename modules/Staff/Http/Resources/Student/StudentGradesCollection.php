<?php

declare(strict_types=1);

namespace MnkyDevTeam\Staff\Http\Resources\Student;

use Illuminate\Http\Resources\Json\ResourceCollection;

final class StudentGradesCollection extends ResourceCollection
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request) : array
    {
        return parent::toArray($request);
    }
}
