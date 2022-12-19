<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\User;

class notify extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notify:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'send email notify all user every day';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
      
    }
}
