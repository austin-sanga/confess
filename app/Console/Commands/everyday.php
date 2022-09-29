<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class everyday extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'day:delete';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This will clean talks table';

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
     * @return int
     */
    public function handle()
    {
        // write what to do
        DB::table(['talks','confessions'])->delete();


    }
}

// Making cron jobs bado
