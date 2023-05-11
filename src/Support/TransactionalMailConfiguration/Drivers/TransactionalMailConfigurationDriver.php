<?php

namespace Spatie\MailcoachUi\Support\TransactionalMailConfiguration\Drivers;

use Illuminate\Contracts\Config\Repository;

abstract class TransactionalMailConfigurationDriver
{
    abstract public function name(): string;

    abstract public function validationRules(): array;

    abstract public function registerConfigValues(Repository $config, array $values);

    public function fields()
    {
        return array_keys($this->validationRules());
    }
}
