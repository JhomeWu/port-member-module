<?php

namespace JhomeWu\PortMemmberModule\Console;

use Illuminate\Console\Command;

class InstallCommand extends Command
{
    protected $signature = 'port-member-module:install';

    public $description = 'install port-member-module package functionality';

    public function handle()
    {
        // $this->call('migrate');  // Need to migrate when install
    }
}
