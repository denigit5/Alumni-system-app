<?php

use App\Http\Controllers\{
    ProfileController, PermissionController, RoleController, UserController,
    AlumniController, EmployerController, SuperUserController, AdminController, ContactController, JobController, AboutController, 
};
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\{
    AuthenticatedSessionController, NewPasswordController, PasswordResetLinkController, RegisteredUserController,
    VerifyEmailController, EmailVerificationNotificationController, EmailVerificationPromptController, ConfirmablePasswordController
};

Route::resource('permissions', PermissionController::class);

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/about', [AboutController::class, 'about'])->name('about');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Registration Routes
Route::get('/register/alumni', [RegisteredUserController::class, 'createAlumni'])->name('alumni-register');
Route::post('/register/alumni', [RegisteredUserController::class, 'storeAlumni']);
Route::get('/register/employer', [RegisteredUserController::class, 'createEmployer'])->name('employer-register');
Route::post('/register/employer', [RegisteredUserController::class, 'storeEmployer']);

// Login Routes
Route::get('/login/alumni', [AuthenticatedSessionController::class, 'showAlumniLoginForm'])->name('alumni-login');
Route::post('/login/alumni', [AuthenticatedSessionController::class, 'store']);
Route::get('/login/employer', [AuthenticatedSessionController::class, 'showEmployerLoginForm'])->name('employer-login');
Route::post('/login/employer', [AuthenticatedSessionController::class, 'store']);
Route::get('/login/superuser', [AuthenticatedSessionController::class, 'showSuperUserLoginForm'])->name('superuser-login');
Route::post('/login/superuser', [AuthenticatedSessionController::class, 'store']);
Route::get('/login/admin', [AuthenticatedSessionController::class, 'showAdminLoginForm'])->name('admin-login');
Route::post('/login/admin', [AuthenticatedSessionController::class, 'store']);
Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::middleware('guest')->group(function () {
    Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])->name('password.request');
    Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])->name('password.email');
    Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])->name('password.reset');
    Route::post('/reset-password', [NewPasswordController::class, 'store'])->name('password.update');
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
    Route::get('/email/verify', [EmailVerificationPromptController::class, '__invoke'])->name('verification.notice');
    Route::get('/email/verify/{id}/{hash}', [VerifyEmailController::class, '__invoke'])->middleware(['signed', 'throttle:6,1'])->name('verification.verify');
    Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])->middleware('throttle:6,1')->name('verification.send');
    Route::get('/confirm-password', [ConfirmablePasswordController::class, 'show'])->name('password.confirm');
    Route::post('/confirm-password', [ConfirmablePasswordController::class, 'store']);

    // Profile Routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    
    // Dashboard Routes
    Route::middleware('auth')->group(function () {
        Route::get('/alumni/dashboard', [AlumniController::class, 'index'])->name('alumni.dashboard');
        Route::get('/employer/dashboard', [EmployerController::class, 'index'])->name('employer.dashboard');
        Route::get('/superuser/dashboard', [SuperUserController::class, 'index'])->name('superuser.dashboard');
        Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    });

    // Alumni-specific routes
    Route::prefix('alumni')->group(function () {
        Route::get('portfolio/create', [AlumniController::class, 'createPortfolio'])->name('alumni.createPortfolio');
        Route::post('portfolio', [AlumniController::class, 'storePortfolio'])->name('alumni.storePortfolio');
        Route::get('project/create', [AlumniController::class, 'createProject'])->name('alumni.createProject');
        Route::post('project', [AlumniController::class, 'storeProject'])->name('alumni.storeProject');
        Route::get('projects/publish', [AlumniController::class, 'publishProjects'])->name('alumni.publishProjects');
        Route::get('/alumni/jobs', [AlumniController::class, 'viewJobs'])->name('alumni.jobs');
        Route::get('/alumni/jobs/{id}', [AlumniController::class, 'viewJobDetails'])->name('alumni.jobDetails');
        Route::get('edit-projects', [AlumniController::class, 'editProjects'])->name('alumni.editProjects');
        Route::get('delete-projects', [AlumniController::class, 'deleteProjects'])->name('alumni.deleteProjects');
        Route::get('job-search', [AlumniController::class, 'jobSearch'])->name('alumni.jobSearch');
        Route::get('apply-for-jobs', [AlumniController::class, 'applyForJobs'])->name('alumni.applyForJobs');
        Route::get('view-applications', [AlumniController::class, 'viewOwnApplications'])->name('alumni.viewOwnApplications');
    });
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/post-jobs', [AdminController::class, 'postJobs'])->name('admin.postJobs');
    Route::post('/admin/store-job', [AdminController::class, 'storeJob'])->name('admin.storeJob');
    Route::get('/admin/manage-job-postings', [AdminController::class, 'manageJobPostings'])->name('admin.manage-job-postings');
    Route::get('/admin/edit-job/{id}', [AdminController::class, 'editJob'])->name('admin.editJob');
    Route::post('/admin/update-job/{id}', [AdminController::class, 'updateJob'])->name('admin.updateJob');
    Route::delete('/admin/delete-job/{id}', [AdminController::class, 'deleteJob'])->name('admin.deleteJob');
    Route::get('/admin/moderate-content', [AdminController::class, 'moderateContent'])->name('admin.moderate-content');
});

require __DIR__.'/auth.php';
