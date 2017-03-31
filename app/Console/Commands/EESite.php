<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class EESite extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'site {subcommand?} {domain?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '[DEPRECATED] Create a site';

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
        switch ($this->argument('subcommand')) {
        case 'create':
        case 'delete':
        case 'update':
        case 'edit':
            $this->comment("DEPRECATED:: You are using outdated syntax ". $this->argument('subcommand') . " site.");
            $this->comment("DEPRECATED:: Please use 'site:". $this->argument('subcommand') . "' instead of 'site ". $this->argument('subcommand') . "'.");
            $this->call("site:". $this->argument('subcommand') , [
                'domain' =>  $this->argument('domain')
            ]);
            break;

        // case 'delete':
        //     $this->comment("DEPRECATED:: You are using outdated syntax to create site.");
        //     $this->comment("DEPRECATED:: Please use 'site:delete' instead of 'site delete'.");
        //     $this->call('site:delete', [
        //         'domain' =>  $this->argument('domain')
        //     ]);
        //     break;
        //
        // case 'edit':
        //     $this->comment("DEPRECATED:: You are using outdated syntax to create site.");
        //     $this->comment("DEPRECATED:: Please use 'site:edit' instead of 'site edit'.");
        //     $this->call('site:edit', [
        //         'domain' =>  $this->argument('domain')
        //     ]);
        //     break;
        //
        // case 'update':
        //     $this->comment("DEPRECATED:: You are using outdated syntax to create site.");
        //     $this->comment("DEPRECATED:: Please use 'site:update' instead of 'site update'.");
        //     $this->call('site:update', [
        //         'domain' =>  $this->argument('domain')
        //     ]);
        //     break;

        case 'create':
            $this->comment("DEPRECATED:: You are using outdated syntax to create site.");
            $this->comment("DEPRECATED:: Please use 'site:create' instead of 'site create'.");
            $this->call('site:create', [
                'domain' =>  $this->argument('domain')
            ]);
            break;


        default:
            echo "WTF You want do with site " .  $this->argument('domain') . " ?\n";
            break;
        }//end of switch
    }//end of handle() function

}
