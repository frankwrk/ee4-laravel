<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class EESiteDelete extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'site:delete {domain}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete Site';

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
        $this->info("EE is supposed to DELETE a site with domain " . $this->argument('domain'));
    }
}
