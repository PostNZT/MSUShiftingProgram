<?php

declare(strict_types=1);

namespace MnkyDevTeam\Admin\Tests\Employee;

use Tests\TestCase;
use Tests\Helpers\AdminFactoryHelper;
use Illuminate\Foundation\Testing\RefreshDatabase;

final class EmployeeDetailsResetPasswordTest extends TestCase
{
    use RefreshDatabase;
    use AdminFactoryHelper;

    /**
     * @test
     */
    public function shouldResetPasswordOfEmployeeUsingAdminAccount() : void
    {
        $employee = $this->fakeEmployee();

        $payload = [
        	'password' => 'msu.admin'
        ];

		// dd($employee, $payload);
        $this->actingAs($this->fakeAdmin(), 'admin')
        	->patch(\route('admin.employee.details.reset-password', $employee), $payload)
        	->assertRedirect(\route('admin.employee.details', \compact('employee')))
            ->assertStatus(302);

    }
}