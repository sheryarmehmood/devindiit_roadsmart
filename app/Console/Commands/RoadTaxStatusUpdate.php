<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Road_tax;

class RoadTaxStatusUpdate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tax:update';

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
        $models = Road_tax::where('quarter_expiry', '<', now())->get();
        $models1 = Road_tax::where('quarter_expiry', '>', now())->get();
        foreach ($models as $model) {
            $model->update(['status' => 'Invalid']); 
        }
        
        foreach ($models1 as $model1) {
            $model1->update(['status' => 'Valid']); 
        }

        $this->info('Status updated successfully!');
    }
}
