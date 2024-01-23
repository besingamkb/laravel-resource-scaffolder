<?php

namespace Besingamkb\LaravelResourceScaffolder\Commands;

use Illuminate\Console\Command;

class LaravelResourceScaffolderCommand extends Command
{
    public $signature = 'laravel-resource-scaffolder';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
