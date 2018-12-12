<?php

declare(strict_types=1);

namespace App\Traits\DataTable;

use Illuminate\Database\Eloquent\Collection;
use Yajra\DataTables\DataTables;

trait DataTableTrait
{
    public function makeDataTable(Collection $collection) : object
    {
        return DataTables::of($collection)->make(true);
    }
}
