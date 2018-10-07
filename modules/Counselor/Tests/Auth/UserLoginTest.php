<?php

declare(strict_types=1);

namespace MnkyDevTeam\Counselor\Tests\Auth;

use Tests\TestCase;
use Tests\Helpers\CounselorFactoryHelper;
use Illuminate\Foundation\Testing\RefreshDatabase;

final class UserLoginTest extends TestCase
{
    use RefreshDatabase;
    use CounselorFactoryHelper;

    /**
     * @test
     */
    public function shouldRedirectToLoginPageIfUserIsNotYetAuthenticated() : void
    {
        $this->get(\route('counselor.home'))->assertRedirect(\route('counselor.login'));
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
