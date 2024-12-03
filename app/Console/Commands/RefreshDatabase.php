<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class RefreshDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:refresh-database';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Refresh the database and seed it';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->call('migrate:fresh', ['--seed' => true]);
        $this->info('Database refreshed and seeded successfully.');
    }
}
