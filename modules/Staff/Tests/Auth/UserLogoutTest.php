<?php

declare(strict_types=1);

namespace MnkyDevTeam\Staff\Tests\Auth;

use Tests\TestCase;
use Tests\Helpers\StaffFactoryHelper;
use Illuminate\Foundation\Testing\RefreshDatabase;

final class UserLogoutTest extends TestCase
{
	use RefreshDatabase;
	use StaffFactoryHelper;

   	/**
     * @test
     */
    public function shouldRedirectToLoginPageUponLogout() : void
    {
        $this->actingAs($this->fakeStaff(), 'staff')
            ->post(\route('staff.logout'), [])
            ->assertRedirect(\route('staff.login'));
    }
}
