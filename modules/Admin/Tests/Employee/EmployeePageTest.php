<?php

declare(strict_types=1);

namespace MnkyDevTeam\Admin\Tests\Employee;

use Tests\TestCase;
use Tests\Helpers\AdminUserFactoryHelper;
use Illuminate\Foundation\Testing\RefreshDatabase;

final class EmployeePageTest extends TestCase
{
    use RefreshDatabase;
    use AdminUserFactoryHelper;

    /**
     * @test
     */
    public function shouldDisplayEmployeePage() : void
    {
        $this->actingAs($this->fakeAdmin(), 'admin')->get(\route('admin.employee'))
            ->assertSeeText('Employee Listing')
            ->assertStatus(200);
    }
}
