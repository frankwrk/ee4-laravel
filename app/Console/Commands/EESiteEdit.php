<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class EESiteEdit extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'site:edit {domain}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Edit site';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info("EE is supposed to EDIT a site with domain " . $this->argument('domain'));
    }
}
