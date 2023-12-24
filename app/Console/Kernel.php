<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
// use Illuminate\Console\Scheduling\Event;
class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected $commands=[
        \App\Console\Commands\admission::class,
    ];
    protected function schedule(Schedule $schedule): void
    {
        $schedule->command('admission:notification')->everyFiveSeconds();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
