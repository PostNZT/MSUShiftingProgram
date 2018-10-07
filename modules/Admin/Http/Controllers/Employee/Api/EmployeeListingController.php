<?php

declare(strict_types=1);

namespace MnkyDevTeam\Admin\Http\Controllers\Employee\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Traits\DataTableTrait;
use Illuminate\Routing\Controller;
use App\Entities\Employee\Employee;
use Illuminate\Database\Eloquent\Collection;
use MnkyDevTeam\Admin\Http\Resources\Employee\EmployeeCollection;
use MnkyDevTeam\Admin\Http\Resources\Employee\Employee as EmployeeResource;

final class EmployeeListingController extends Controller
{
    public function listing() : Collection
    {
        $employeeCollection = Collection::make(new EmployeeCollection(new EmployeeResource(
            Employee::all()
        )));

        return $employeeCollection;
    }

    public function datatables()
    {
        return $this->makeDataTable($this->listing());
    }
}
