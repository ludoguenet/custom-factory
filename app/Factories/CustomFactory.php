<?php

namespace App\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

abstract class CustomFactory extends Factory
{
    public function newModel(array $attributes = [])
    {
        $model = $this->modelName();

        return new FactoryCollectionProxy(
            new $model($attributes)
        );
    }

    public function make($attributes = [], ?Model $parent = null)
    {
        $instances = parent::make($attributes, $parent);

        if ($instances instanceof Collection) {
            return $instances->map(fn ($instance) => $this->resolveInstance($instance));
        }

        return $this->resolveInstance($instances);
    }

    private function resolveInstance($instance)
    {
        return $instance instanceof FactoryCollectionProxy ? $instance->getInstance() : $instance;
    }
}
