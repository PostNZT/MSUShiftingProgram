<?php

declare(strict_types=1);

namespace MnkyDevTeam\Staff\Tests\Auth;

use Tests\TestCase;
use Tests\Helpers\StaffFactoryHelper;
use Illuminate\Foundation\Testing\RefreshDatabase;

final class UserLoginTest extends TestCase
{
    use RefreshDatabase;
    use StaffFactoryHelper;

    /**
     * @test
     */
    public function shouldRedirectToLoginPageIfUserIsNotYetAuthenticated() : void
    {
        $this->get(\route('staff.home'))->assertRedirect(\route('staff.login'));
    }

    /**
     * @test
     */
    public function shouldRedirectProfilePageOnceAuthenticated() : void
    {
        $this->fakeUserWithAuth('jtrogelio', 'jtrogelio');
        $this->post(\route('staff.login.submit'), ['username' => 'jtrogelio', 'password' => 'jtrogelio'])
            ->assertRedirect(\route('staff.user.dashboard'));
    }

     /**
     * @test
     */
    public function shouldSeeErrorMessageIfFailedToAuthenticateUser() : void
    {
        $this->post(\route('staff.login.submit'), ['username' => 'unknown', 'password' => 'invalid-password'])
            ->assertSessionHasErrors();
    }
}
