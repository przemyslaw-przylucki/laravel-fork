<?php

declare(strict_types=1);

namespace Illuminate\Tests\Integration\Console\Fixtures;

use Illuminate\Console\Command;

final class FooCommand extends Command
{
    protected $name = 'foo:command';

    public function __invoke()
    {

    }
}