<?php

namespace Webaction\Admiko\Commands;

use Illuminate\Console\Command;

class AdmikoCommand extends Command
{
    public $signature = 'admiko-laravel';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
