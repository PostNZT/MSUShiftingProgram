<?php

namespace App\Entities\Programs;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class College extends Model
{
    use Notifiable;
    protected $guarded = [];
}
