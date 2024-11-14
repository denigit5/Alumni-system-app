<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JobApplication;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class JobApplicationsCrudController extends CrudController
{
    public function setup()
    {
        $this->crud->setModel(JobApplication::class);
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/job-applications');
        $this->crud->setEntityNameStrings('job application', 'job applications');
    }

    public function index()
    {
        $applications = JobApplication::with('alumnus', 'job')->get();

        return view('admin.job_applications.index', compact('applications'));
    }
}
