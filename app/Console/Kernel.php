<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

//include our Console\Application
use EasyEngine\Console\Application as EEArtisan;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
     protected $commands = [
         Commands\EESite::class,
         Commands\EESiteCreate::class,
         Commands\EESiteUpdate::class,
         Commands\EESiteEdit::class,
         Commands\EESiteDelete::class,
     ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();
    }

    /**
     * Register the Closure based commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        require base_path('routes/console.php');
    }


    //Create artisan object from our console/Application class
    protected function getArtisan()
    {
        if (is_null($this->artisan)) {
            return $this->artisan = (new EEArtisan($this->app, $this->events, $this->app->version()))
            ->resolveCommands($this->commands);
        }

        return $this->artisan;
    }
}
