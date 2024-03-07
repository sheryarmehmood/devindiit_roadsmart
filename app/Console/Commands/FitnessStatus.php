<?php

namespace App\Console\Commands;
use App\Models\Vehicles;
use Illuminate\Console\Command;

class FitnessStatus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'minute:update';

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
       $models = Vehicles::where('fit_ex_date', '<', now())->get();
        $models1 = Vehicles::where('fit_ex_date', '>', now())->get();
        foreach ($models as $model) {
            $model->update(['fit_status' => 'Invalid']); 
        }
        
        foreach ($models1 as $model1) {
            $model1->update(['fit_status' => 'Valid']); 
        }

        $this->info('Status updated successfully!');
    }
}
