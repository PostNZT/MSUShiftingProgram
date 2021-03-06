<?php

declare(strict_types=1);

namespace MnkyDevTeam\Admin\Http\Resources\Employee;

use Illuminate\Http\Resources\Json\JsonResource;

final class Employee extends JsonResource
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
            'first_name'        => $this->first_name,
            'middle_name'       => $this->middle_name,
            'last_name'         => $this->last_name,
            'employee_id'       => $this->employee_id,
            'role_id'           => $this->role->name,
            'uuid'              => $this->uuid
        ];
    }
}
