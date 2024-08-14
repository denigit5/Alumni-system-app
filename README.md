IST Alumni System
A platform connecting IST alumni with potential employers, providing opportunities for networking, job search, and portfolio management.
Table of Contents
Purpose
Features
Technologies Used
Installation
Usage
File Structure
Routes
Permissions
Favicon
Contributing
License
Purpose
The IST Alumni System is designed to facilitate connections between IST alumni and potential employers. It allows alumni to create and manage their professional portfolios, search for relevant job opportunities, and showcase their work to potential employers. The platform also includes roles for administrators and superusers to manage users, job postings, and content moderation, ensuring a high-quality experience for all participants.

Features
Superuser Capabilities:
Manage user roles and permissions.
Add and manage users.
Admin Capabilities:
Post and manage job opportunities.
Moderate content uploaded by alumni.
Alumni Capabilities:
Create and update portfolios.
Publish projects and apply for jobs.
Employer Capabilities:
Browse alumni profiles and job applications.
Post job openings.
Enhanced Networking and Community Engagement:
Alumni can network, showcase their skills, and access targeted job opportunities.
Technologies Used
Backend: Laravel (PHP framework)
Frontend: HTML, CSS, JavaScript
Database: MySQL (or other DBMS supported by Laravel)
Version Control: Git
Deployment: Laravel’s built-in server or external hosting services
Installation
To set up the IST Alumni System locally, follow these steps:

Clone the repository:

bash
Copy code
git clone https://github.com/your-username/ist-alumni-system.git
cd ist-alumni-system
Install dependencies:

bash
Copy code
composer install
npm install
Set up the .env file:

Duplicate the .env.example file and rename it to .env.
Configure your database, mail, and other necessary environment variables.
Generate an application key:

bash
Copy code
php artisan key:generate
Run migrations and seed the database:

bash
Copy code
php artisan migrate --seed
Serve the application:

bash
Copy code
php artisan serve
Usage
Favicon
Ensure the favicon is correctly set up by adding the following line to your head section:

html
Copy code
<link rel="icon" href="{{ asset('images/istfavicon.png') }}" type="image/png">
Permissions and Roles
Superuser:
Can manage user roles, permissions, and users.
Admin:
Can post and manage job opportunities, moderate content.
Alumni:
Can create portfolios, publish projects, and apply for jobs.
Potential Employer:
Can view alumni profiles and projects, post job openings.
Routes
Below is a list of routes used in the admin dashboard:

php
Copy code
Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/post-jobs', [AdminController::class, 'postJobs'])->name('admin.postJobs');
Route::post('/admin/store-job', [AdminController::class, 'storeJob'])->name('admin.storeJob');
Route::get('/admin/manage-job-postings', [AdminController::class, 'manageJobPostings'])->name('admin.manage-job-postings');
Route::get('/admin/edit-job/{id}', [AdminController::class, 'editJob'])->name('admin.editJob');
Route::post('/admin/update-job/{id}', [AdminController::class, 'updateJob'])->name('admin.updateJob');
Route::delete('/admin/delete-job/{id}', [AdminController::class, 'deleteJob'])->name('admin.deleteJob');
Route::get('/admin/moderate-content', [AdminController::class, 'moderateContent'])->name('admin.moderate-content');
File Structure
arduino
Copy code
ist-alumni-system/
│
├── app/
│   ├── Controllers/
│   │   ├── AdminController.php
│   │   └── ...
│   └── Models/
│       └── ...
├── resources/
│   ├── views/
│   │   ├── admin/
│   │   │   ├── dashboard.blade.php
│   │   │   ├── post-jobs.blade.php
│   │   │   └── ...
│   └── css/
│       └── app.css
├── public/
│   ├── images/
│   │   └── istfavicon.png
│   └── ...
├── routes/
│   ├── web.php
│   └── ...
└── ...
Contributing
Contributions are welcome! If you'd like to contribute to this project, please fork the repository and use a feature branch. Pull requests are warmly welcomed.

License
This project is open source and available under the MIT License.

This README provides an overview of the IST Alumni System, helping users and developers understand the purpose, setup, and usage of the project. You can customize this file further based on specific needs or additional details.
