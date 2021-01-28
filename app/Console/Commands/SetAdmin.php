<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use App\Models\User;

class SetAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:adminuser {userId}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Grants the admin role to a user';

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
        User::where('id', $this->argument('userId'))
              ->update(['role_id' => 3]);

        /*$username = User::find($this->argument('userId'));
        Log::debug(' est admin');*/
    }
}
