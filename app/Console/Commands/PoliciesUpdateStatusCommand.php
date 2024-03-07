<?php

namespace App\Console\Commands;
use App\Models\Policies;
use Illuminate\Console\Command;

class PoliciesUpdateStatusCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'status:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        
        $models = Policies::where('expiry_date', '<', now())->get();
        $models1 = Policies::where('expiry_date', '>', now())->get();
        foreach ($models as $model) {
            $model->update(['status' => 'inactive']); 
        }
        
        foreach ($models1 as $model1) {
            $model1->update(['status' => 'active']); 
        }

        $this->info('Status updated successfully!');
       
    }
}
