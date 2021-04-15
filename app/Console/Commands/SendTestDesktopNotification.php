<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SendTestDesktopNotification extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notifications:testdesktop';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send Test Desktop Notification';

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
        $this->notify('Hello Web Artisan', 'Love beautiful code? We do too!', public_path('images/logo/logo.png'));
        return 0;
    }
}
