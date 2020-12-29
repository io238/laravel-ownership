<?php

namespace Io238\LaravelOwnership\Commands;

use Illuminate\Console\Command;

class LaravelOwnershipCommand extends Command
{
    public $signature = 'laravel-ownership';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
