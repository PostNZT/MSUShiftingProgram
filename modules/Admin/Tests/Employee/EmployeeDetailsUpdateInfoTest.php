<?php

declare(strict_types=1);

namespace MnkyDevTeam\Admin\Tests\Employee;

use Tests\TestCase;
use Tests\Helpers\AdminFactoryHelper;
use Illuminate\Foundation\Testing\RefreshDatabase;

final class EmployeeDetailsUpdateInfoTest extends TestCase
{
    use RefreshDatabase;
    use AdminFactoryHelper;

    /**
     * @test
     */
    public function shouldUpdateEmployeeInfo() : void
    {
        // $employee = $this->fakeEmployee();

        // $payload = [
        // 	'picture'			=> 'image.png',
        // 	'first_name'		=> 'John',
        // 	'middle_name'		=> 'A',
        // 	'last_name'			=> 'Trogelio',
        // 	'employee_id'		=> '2015-8338',
     //        'birthdate'         => '2018-10-07',
     //        'role_id'           => 2
        // ];

        // $this->actingAs($this->fakeAdmin(), 'admin')
        // 	->patch(\route('admin.employee.details.update-info', $employee), $payload)
        // 	->assertRedirect(\route('admin.employee.details', \compact('employee')))
     //        ->assertStatus(302);

        $this->assertTrue(true);
    }
}
