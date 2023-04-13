<?php

namespace App\Factories;

use Faker\Provider\DateTime;
use Faker\Provider\Lorem;
use Illuminate\Support\Fluent;

class TweetFactory extends CustomFactory
{
    protected $model = Fluent::class;

    /**
     * @inheritDoc
     */
    public function definition()
    {
        $this->faker->addProvider(new Lorem($this->faker));
        $this->faker->addProvider(new DateTime($this->faker));

        return [
            'id' => $this->faker->randomNumber(),
            'text' => $this->faker->sentence(),
            'created_at' => $this->faker->dateTime(),
        ];
    }
}
