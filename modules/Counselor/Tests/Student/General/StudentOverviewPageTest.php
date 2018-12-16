<?php

declare(strict_types=1);

namespace MnkyDevTeam\Counselor\Tests\Student\General;

use Tests\TestCase;
use Tests\Helpers\CounselorFactoryHelper;
use Illuminate\Foundation\Testing\RefreshDatabase;

final class StudentOverviewPageTest extends TestCase
{
    use RefreshDatabase;
    use CounselorFactoryHelper;

    /**
    *@test
    */
    public function shouldDisplayGeneralPageSuccessfully() : void
    {
        $this->actingAs($this->fakeCounselor(), 'counselor')
            ->get(\route('counselor.student.general'))
            ->assertStatus(200);
    }
}
