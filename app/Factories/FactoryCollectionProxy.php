<?php

namespace App\Factories;

class FactoryCollectionProxy
{
    public function __construct(
        protected $instance
    ) {}

    public function getInstance()
    {
        return $this->instance;
    }

    public function newCollection($items = null)
    {
        return collect($items);
    }
}
