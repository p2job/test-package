<?php

namespace Proform\TestPackege\Commands;

use Illuminate\Console\Command;

class TestPackegeCommand extends Command
{
    public $signature = 'test-packege';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
