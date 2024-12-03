<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Console\Scheduling\Schedule;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();


// Database refresh schedule
Artisan::command('db:refresh', function () {
    $this->call('migrate:fresh', ['--seed' => true]);
    $this->info('Database refreshed and seeded successfully!');
})->purpose('Refresh and seed database');

// Schedule configuration
$schedule = app(Schedule::class);
$schedule->command('db:refresh')->everyFiveMinutes();