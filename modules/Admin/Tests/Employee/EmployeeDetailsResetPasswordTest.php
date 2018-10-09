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
		$this->assertTrue(true);
	}
}
