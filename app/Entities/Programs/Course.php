<?php

declare(strict_types=1);

namespace App\Entities\Programs;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Course extends Model
{
    use Notifiable;
    protected $guarded = [];

}
