<?php

declare(strict_types=1);

namespace App\Entities\Misc;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

final class ShiftingStatus extends Model
{
    use Notifiable;
    protected $guarded = [];
}
