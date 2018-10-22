<?php

declare(strict_types=1);

namespace MnkyDevTeam\Staff\Tests\Profile;

use Tests\TestCase;
use Tests\Helpers\StaffFactoryHelper;
use Illuminate\Foundation\Testing\RefreshDatabase;

final class ProfilePageTest extends TestCase
{
	use RefreshDatabase;
	use StaffFactoryHelper;

	/**
	 * @test
	 * @return void
	 */
	public function shouldDisplayProfilePageSuccessfully() : void
	{
		$this->actingAs($this->fakeStaff(), 'staff')
			->get(\route('staff.profile'))
			->assertStatus(200);
	}
}
