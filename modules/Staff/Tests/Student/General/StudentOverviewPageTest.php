<?php

declare(strict_types=1);

namespace MnkyDevTeam\Staff\Tests\Student\General;

use Tests\TestCase;
use Tests\Helpers\StaffFactoryHelper;
use Illuminate\Foundation\Testing\RefreshDatabase;

final class StudentOverviewPageTest extends TestCase
{
    use RefreshDatabase;
    use StaffFactoryHelper;

    /**
     * @test
     */
    public function shouldDisplayOverviewPageSuccessfully() : void
    {
        $this->actingAs($this->fakeStaff(), 'staff')
            ->get(\route('staff.student.general'))
            ->assertStatus(200);
    }
}
