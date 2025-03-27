<?php

namespace Tests\Unit;

use App\Models\Employer;
use App\Models\Job;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class JobTest extends TestCase
{
    use RefreshDatabase; // Ensures database is reset for each test

    public function test_example(): void
    {
        $employer = Employer::factory()->create();
        $job = Job::factory()->create([
            'employer_id' => $employer->id,
        ]);

        $this->assertTrue($job->employer->is($employer));
    }

    public function test_tags()
    {
        $job = Job::factory()->create();

        $job->tag('Frontend');

        $this->assertCount(1, $job->tags);
    }
}
