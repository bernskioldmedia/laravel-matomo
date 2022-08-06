<?php

namespace BernskioldMedia\LaravelMatomo\Commands;

use Illuminate\Console\Command;

class LaravelMatomoCommand extends Command
{
    public $signature = 'laravel-matomo';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
