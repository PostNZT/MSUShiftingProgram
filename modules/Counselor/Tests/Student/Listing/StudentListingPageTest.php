<?php

declare(strict_types=1);

namespace MnkyDevTeam\Counselor\Tests\Student\Listing;

use Tests\TestCase;
use Tests\Helpers\CounselorFactoryHelper;
use Illuminate\Foundation\Testing\RefreshDatabase;

final class StudentListingPageTest extends TestCase
{
    use RefreshDatabase;
    use CounselorFactoryHelper;

    /**
    *@test
    */
    public function shouldDisplayStudentListSuccessfully() : void
    {
        $this->actingAs($this->fakeCounselor(), 'counselor')
            ->get(\route('counselor.student.listing'))
            ->assertStatus(200);
    }
}
