<?php

namespace App\Http\Controllers;

use App\Models\Alumnus;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AnalyticsController extends Controller
{
    public function getAnalyticsData()
    {
        // Fetch alumni engagement data by industry
        $alumniEngagement = Alumnus::select('industry', DB::raw('count(*) as count'))
            ->groupBy('industry')
            ->get()
            ->pluck('count', 'industry');

        // Fetch job postings and applications per month
        $jobPostings = Job::select(
            DB::raw("DATE_FORMAT(created_at, '%Y-%m') as month"),
            DB::raw('count(*) as count')
        )
        ->groupBy('month')
        ->orderBy('month', 'asc')
        ->get()
        ->pluck('count', 'month');

        $applications = DB::table('applied_jobs')
            ->select(
                DB::raw("DATE_FORMAT(created_at, '%Y-%m') as month"),
                DB::raw('count(*) as count')
            )
            ->groupBy('month')
            ->orderBy('month', 'asc')
            ->get()
            ->pluck('count', 'month');

        return response()->json([
            'alumniEngagement' => $alumniEngagement,
            'jobPostings' => $jobPostings,
            'applications' => $applications,
        ]);
    }
}
