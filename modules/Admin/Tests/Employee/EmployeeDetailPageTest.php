<?php

declare(strict_types=1);

namespace MnkyDevTeam\Admin\Tests\Employee;

use Tests\TestCase;
use Tests\Helpers\AdminFactoryHelper;
use Illuminate\Foundation\Testing\RefreshDatabase;

final class EmployeeDetailPageTest extends TestCase
{
    use RefreshDatabase;
    use AdminFactoryHelper;

    /**
     * @test
     */
    public function shouldDisplayDetailPageOfEmployee() : void
    {
        $employee = $this->fakeEmployee();

        $this->actingAs($this->fakeAdmin(), 'admin')
            ->get(\route('admin.employee.details', \compact('employee')))
            ->assertStatus(200);
    }
}
