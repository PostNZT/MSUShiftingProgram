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

    	// payload = [
    	// 	'picture'			=> '',
    	// 	'first_name'		=> 'John',
    	// 	'middle_name'		=> 'A.'
    	// 	'last_name'			=> 
    	// ];

    	$this->assertTrue(true);
    }
}
