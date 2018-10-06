<?php

declare(strict_types=1);

namespace MnkyDevTeam\Admin\Tests\Employee;

use Tests\TestCase;
use Tests\Helpers\AdminUserFactoryHelper;
use Illuminate\Foundation\Testing\RefreshDatabase;

final class EmployeeEnlistmentTest extends TestCase
{
    use RefreshDatabase;
    use AdminUserFactoryHelper;

    /**
     * @test
     */
    public function shouldEnlistEmployeeAsCounselor() : void
    {
        $counselorEmployee = $this->generateDummyEmployeeInfo();

        $this->actingAs($this->fakeAdmin(), 'admin')->post(\route('admin.employee.enlist'), $counselorEmployee);
        $this->assertDatabaseHas('employees', [
            'first_name'    => $counselorEmployee['first_name'],
            'last_name'     => $counselorEmployee['last_name'],
            'role_id'       => $counselorEmployee['role_id']
        ]);
    }

    /**
     * @test
     */
    public function shouldEnlistEmployeeAsStaff() : void
    {
        $staffEmployee = $this->generateDummyEmployeeInfo(
            "Jhune Carlo",
            "B",
            "Trogelio",
            '1978-02-03',
            2
        );

        $this->actingAs($this->fakeAdmin(), 'admin')->post(\route('admin.employee.enlist'), $staffEmployee);
        $this->assertDatabaseHas('employees', [
            'first_name'    => $staffEmployee['first_name'],
            'last_name'     => $staffEmployee['last_name'],
            'role_id'       => $staffEmployee['role_id']
        ]);
    }

    /**
     * @test
     */
    public function shouldRedirectAfterEnlistingCounselorEmployee() : void
    {
        $counselorEmployee = $this->generateDummyEmployeeInfo();

        $response = $this->actingAs($this->fakeAdmin(), 'admin')
            ->post(\route('admin.employee.enlist'), $counselorEmployee);

        $response->assertRedirect(\route('admin.employee'))->assertStatus(302);
    }
}
