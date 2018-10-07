<?php

declare(strict_types=1);

namespace MnkyDevTeam\Admin\Tests\Employee\Api;

use Tests\TestCase;
use App\Entities\Employee\Employee;
use Tests\Helpers\AdminFactoryHelper;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;
use MnkyDevTeam\Admin\Http\Resources\Employee\EmployeeCollection;
use MnkyDevTeam\Admin\Http\Resources\Employee\Employee as EmployeeResource;

final class EmployeeListingTest extends TestCase
{
    use RefreshDatabase;
    use AdminFactoryHelper;

    /**
     * @test
     */
    public function shouldDisplayAllEmployees() : void
    {
        $employeeCollection = Collection::make(new EmployeeCollection(new EmployeeResource(
            Employee::all()
        )));

        $this->actingAs($this->fakeAdmin(), 'admin')
            ->get(\route('admin.employee.listing.api'))
            ->assertStatus(200);
    }
}
