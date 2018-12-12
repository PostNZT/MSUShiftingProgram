<?php

declare(strict_types=1);

namespace App\Entities\Programs;

use App\Entities\Student\Student;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

final class College extends Model
{
    use Notifiable;
    protected $guarded = [];

}
