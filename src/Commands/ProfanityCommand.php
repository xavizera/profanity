<?php

namespace Xavizera\Profanity\Commands;

use Illuminate\Console\Command;

class ProfanityCommand extends Command
{
    public $signature = 'profanity';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
