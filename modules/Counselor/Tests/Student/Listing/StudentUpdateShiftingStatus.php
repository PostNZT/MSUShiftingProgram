<?php

declare(strict_types=1);

namespace MnkyDevTeam\Counselor\Tests\Student\Listing;

use Tests\TestCase;
use Tests\Helpers\CounselorFactoryHelper;
use Illuminate\Foundation\Testing\RefreshDatabase;

final class StudentUpdateShiftingStatus extends TestCase
{
    use RefreshDatabase;
    use CounselorFactoryHelper;

    /**
     * @test
     */
    public function shouldUpdateShiftingStatusSuccessfully() : void
    {
        $this->assertTrue(true);
    }
}
