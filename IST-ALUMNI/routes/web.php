<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\EmployersDashboardController;
use App\Http\Controllers\AnalyticsController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\JobApplicationController;
use App\Http\Controllers\Admin\JobApplicationsCrudController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Models\Portfolio;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::group(['middleware' => ['auth:alumnus']], function () {
    Route::post('/upload-avatar', [UserController::class, 'uploadAvatar'])->name('upload.avatar');
});

Route::get('/home', [PageController::class, 'home'])->name('/'); 

Route::get('/about', [PageController::class, 'about'])->name('about'); 

Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Registration Routes
Route::get('/register/alumni', [RegisteredUserController::class, 'createAlumni'])->name('alumni-register');
Route::post('/register/alumni', [RegisteredUserController::class, 'storeAlumni']);
Route::get('/register/employers', [RegisteredUserController::class, 'createEmployers'])->name('employers-register');
Route::post('/register/employers', [RegisteredUserController::class, 'storeEmployers']);

//Login Routes
Route::get('/login/alumni', [AuthenticatedSessionController::class, 'createAlumni'])->name('alumni-login');
Route::post('/login/alumni', [AuthenticatedSessionController::class, 'storeAlumni']);

Route::get('/login/employers', [AuthenticatedSessionController::class, 'showEmployersLoginForm'])->name('employers-login');
Route::post('/login/employers', [AuthenticatedSessionController::class, 'storeEmployers']);

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');

Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])->name('password.request');
Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])->name('password.email');
Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])->name('password.reset');
Route::post('/reset-password', [NewPasswordController::class, 'store'])->name('password.update');

Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])->middleware('throttle:6,1')->name('verification.send');
Route::get('/confirm-password', [ConfirmablePasswordController::class, 'show'])->name('password.confirm');
Route::post('/confirm-password', [ConfirmablePasswordController::class, 'store']);

// Profile Routes
Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::get('/profile/show', [ProfileController::class, 'show'])->name('profile.show');
Route::post('/profile/upload-photos', [ProfileController::class, 'uploadPhotos'])->name('profile.uploadPhotos');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

//Employers routes
Route::get('/employers/dashboard', [EmployersDashboardController::class, 'dashboard'])->name('employers.dashboard');
Route::prefix('employers')->name('employers.')->group(function () {
    Route::get('view-applicants', [EmployersDashboardController::class, 'viewApplicants'])->name('view_applicants');
    Route::get('view-projects', [EmployersDashboardController::class, 'viewProjects'])->name('view_projects');
    Route::get('/create-job', [EmployersDashboardController::class, 'createJob'])->name('create_job');
    Route::get('/talent-discovery', [EmployersDashboardController::class, 'talentDiscovery'])->name('talent_discovery');
    Route::get('/job-matching', [EmployersDashboardController::class, 'jobMatching'])->name('job_matching');
});

Route::get('/analytics/data', [AnalyticsController::class, 'getAnalyticsData'])->name('analytics.data');


//Alumni routes
Route::get('/alumni/dashboard', [AlumniController::class, 'dashboard'])->name('alumni.dashboard');
Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');
Route::post('/portfolio/store', [PortfolioController::class, 'store'])->name('portfolio.store');
Route::get('/portfolio-view', function () {
    return view('portfolio-view');
})->name('portfolio-view');

Route::get('/projects', function () {
    return view('projects');
})->name('projects');

Route::get('/job_search', function () {
    return view('job_search');
})->name('job_search');
Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store');
Route::get('/jobs', [JobController::class, 'index'])->name('job_search');
Route::get('/jobs/{id}', [JobController::class, 'show'])->name('job_details');
Route::get('/jobs/{id}/apply', [JobController::class, 'apply'])->name('jobs_apply');
Route::post('/jobs/{id}/apply', [JobController::class, 'submitApplication'])->name('jobs.submit');

Route::post('/jobs/{job}/apply', [JobApplicationController::class, 'submit'])->name('jobs.submit');
Route::get('/admin/job-applications', [JobApplicationsCrudController::class, 'index'])->name('admin.job_applications.index');

Route::get('building_a_strong_portfolio', function () {
    return view('/career_resources/building_a_strong_portfolio');
})->name('building_a_strong_portfolio');

Route::get('building_your_personal_brand', function () {
    return view('/career_resources/building_your_personal_brand');
})->name('building_your_personal_brand');

Route::get('effective_resume_writing', function () {
    return view('/career_resources/effective_resume_writing');
})->name('effective_resume_writing');

Route::get('mastering_job_interviews', function () {
    return view('/career_resources/mastering_job_interviews');
})->name('mastering_job_interviews');

Route::get('mentorship_programs', function () {
    return view('/career_resources/mentorship_programs');
})->name('mentorship_programs');

Route::get('networking_tips', function () {
    return view('/career_resources/networking_tips');
})->name('networking_tips');

Route::get('partner_companies', function () {
    return view('/career_resources/partner_companies');
})->name('partner_companies');



require __DIR__.'/auth.php';
