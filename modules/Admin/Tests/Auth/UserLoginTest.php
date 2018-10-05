<?php

declare(strict_types=1);

namespace MnkyDevTeam\Admin\Tests\Auth;

use Tests\TestCase;
use Tests\Helpers\AdminUserFactoryHelper;
use Illuminate\Foundation\Testing\RefreshDatabase;

final class UserLoginTest extends TestCase
{
	use RefreshDatabase;
	use AdminUserFactoryHelper;

	/**
	 * @test
	 */
	public function shouldRedirectToLoginPageIfUserIsNotYetAuthenticated() : void
	{
		$this->get(\route('admin.home'))->assertRedirect(\route('admin.login'));
	}

	/**
	 * @test
	 */
	public function shouldRedirectProfilePageOnceAuthenticated() : void
    {
        $this->fakeUserWithAuth('msu.admin', 'msu.admin');
        $this->post(\route('admin.login.submit'), ['username' => 'msu.admin', 'password' => 'msu.admin'])
            ->assertRedirect(\route('admin.user.dashboard'));
    }

     /**
     * @test
     */
    public function shouldSeeErrorMessageIfFailedToAuthenticateUser() : void
    {
        $this->post(\route('admin.login.submit'), ['username' => 'unknown', 'password' => 'invalid-password'])
            ->assertSessionHasErrors();
    }
}
