<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function jobs(){
        
        return view('serviceprovider.jobs');
    }

    public function add_job(){
        
        return view('serviceprovider.add-job');
    }
	public function edit_job(){
        
        return view('serviceprovider.edit-job');
    }
	public function job_details(){
        
        return view('serviceprovider.job-details');
    }
}