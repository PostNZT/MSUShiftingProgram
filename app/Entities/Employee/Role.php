<?php

declare(strict_types=1);

namespace App\Entities\Employee;

use App\Entities\Employee\Employee;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

final class Role extends Authenticatable
{
    use Notifiable;
    protected $guarded = [];

    /**
     * This is a magic method to pull the current auth guard in the AppServiceProvider::boot() method
     *
     * @return string
     */
    public function getAuthGuard() : string
    {
        return $this->guard;
    }

    public function employees() : object
    {
        return $this->hasMany(Employee::class, 'role_id');
    }
}
