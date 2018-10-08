<?php

declare(strict_types=1);

namespace MnkyDevTeam\Counselor\Tests\Auth;

use Tests\TestCase;
use Tests\Helpers\CounselorFactoryHelper;
use Illuminate\Foundation\Testing\RefreshDatabase;

final class UserLogoutTest extends TestCase
{
    use RefreshDatabase;
    use CounselorFactoryHelper;

    /**
     * @test
     */
    public function shouldRedirectToLoginPageUponLogout() : void
    {
        $this->actingAs($this->fakeCounselor(), 'counselor')
            ->post(\route('counselor.logout'), [])
            ->assertRedirect(\route('counselor.login'));
    }
}
