<?php

namespace Tests\Unit;

use App\Factories\TweetFactory;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
        $tweet = TweetFactory::new()->times(5)->make();

        dd($tweet);
    }
}
