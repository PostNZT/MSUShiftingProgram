<?php

declare(strict_types=1);

namespace MnkyDevTeam\Admin\Tests\Auth;

use Tests\TestCase;
use Tests\Helpers\AdminFactoryHelper;
use Illuminate\Foundation\Testing\RefreshDatabase;

final class UserLogoutTest extends TestCase
{
    use RefreshDatabase;
    use AdminFactoryHelper;

    /**
     * @test
     */
    public function shouldRedirectToLoginPageUponLogout() : void
    {
        $this->actingAs($this->fakeAdmin(), 'admin')
            ->post(\route('admin.logout'), [])
            ->assertRedirect(\route('admin.login'));
    }
}
