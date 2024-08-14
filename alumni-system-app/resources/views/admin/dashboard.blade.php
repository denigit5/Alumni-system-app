<x-app-layout>
    <!-- Styles -->
    <style>
        body {
            background-color: #EFEFEF; /* Light background */
            color: #333; /* Dark grey text */
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        /* Navigation Bar Styling */
        .navbar {
            background-color: #B71C1C; /* Red background */
            color: white;
            padding: 1rem;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar .logo {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .navbar .nav-links {
            display: flex;
            align-items: center;
        }

        .navbar .nav-links a {
            margin-right: 1.5rem;
            color: white;
            text-decoration: none;
            font-weight: 500;
        }

        .navbar .nav-links a:hover {
            color: #FFD600; /* Yellow hover effect */
        }

        .navbar .dropdown {
            position: relative;
        }

        .navbar .dropdown-toggle {
            cursor: pointer;
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 50%;
            background-color: #757575; /* Gray background */
            display: flex;
            align-items: center;
        }

        .navbar .dropdown-menu {
            display: none;
            position: absolute;
            top: 100%;
            right: 0;
            background-color: white;
            color: #333;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            border-radius: 0.5rem;
            overflow: hidden;
            z-index: 1;
        }

        .navbar .dropdown-menu.show {
            display: block;
        }

        .navbar .dropdown-menu a {
            display: block;
            padding: 0.5rem 1rem;
            color: #333;
            text-decoration: none;
            border-bottom: 1px solid #EFEFEF;
        }

        .navbar .dropdown-menu a:hover {
            background-color: #EFEFEF;
        }

        .navbar .profile-pic {
            margin-left: 1rem;
            display: flex;
            align-items: center;
        }

        .navbar .profile-pic img {
            border-radius: 50%;
            width: 40px;
            height: 40px;
            object-fit: cover;
        }

        /* Sidebar Styling */
        .sidebar {
            background-color: #333; /* Gray background */
            color: white;
            width: 150px;
            padding: 1rem;
            position: fixed;
            height: 100%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .sidebar a {
            display: block;
            padding: 0.75rem 1rem;
            color: white;
            text-decoration: none;
            margin-bottom: 0.5rem;
            border-radius: 0.5rem;
        }

        .sidebar a:hover {
            background-color: #B71C1C; /* Red background on hover */
        }

        /* Main Content Styling */
        .main-content {
            margin-left: 250px;
            padding: 2rem;
        }

        .cards {
            display: flex;
            flex-direction: column;
            gap: 1rem;
            align-items: center;
            justify-content: center;
        }

        .card {
            background-color: white;
            width: 60%;
            height: 50px;
            padding: 1rem;
            border-radius: 0.5rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: left;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            animation: fadeIn 1s ease-in-out;
        }

        .card:nth-child(2) {
            animation-delay: 0.1s;
        }

        .card:nth-child(3) {
            animation-delay: 0.2s;
        }

        .card-icon {
            font-size: 1.5rem;
            color: #B71C1C; /* Red icon */
        }

        /* Permissions Section Styling */
        .permissions-section {
            background-color: #F5F5F5;
            padding: 1.5rem;
            border-radius: 0.5rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            margin-bottom: 2rem;
        }

        .permissions-section h3 {
            margin-bottom: 1rem;
            color: #B71C1C;
        }

        .permissions-list {
            list-style: none;
            padding-left: 0;
        }

        .permissions-list li {
            margin-bottom: 0.5rem;
            color: #333;
        }

        /* Footer Styling */
        .footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1rem;
            margin-top: 2rem;
        }

        /* Animations */
        .fade-in {
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>

    <!-- Navigation Bar -->
    <div class="navbar">
        <div class="logo">IST Alumni System</div>
        <div class="nav-links">
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('/jobs') }}">Jobs</a>
            <div class="dropdown">
                <div class="dropdown-toggle" onclick="toggleDropdown()">Menu</div>
                <div class="dropdown-menu">
                    <a href="{{ url('/profile') }}">Profile</a>
                    <a href="{{ route('logout') }}" 
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    </form>
                </div>
            </div>
            <div class="profile-pic">
                <img src="" alt="User Profile Picture" style="background-color: #EFEFEF; color: #757575; font-size: 15px;">
            </div>
        </div>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
        <a href="{{ url('/admin/dashboard') }}">Dashboard</a>
        <a href="{{ url('/admin/manage-users') }}">Manage Users</a>
        <a href="{{ url('/admin/settings') }}">Settings</a>
        <a href="{{ url('/admin/support') }}">Support</a>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Admin Permissions Section -->
        <div class="permissions-section">
            <h3>Admin Permissions</h3>
            <ul class="permissions-list" style="display: grid; grid-template-columns: repeat(3, 1fr);">
                <li>View Roles</li>
                <li>Create Roles</li>
                <li>Update Roles</li>
                <li>View Users</li>
                <li>Create Users</li>
                <li>Update Users</li>
                <li>View Jobs</li>
                <li>Create Jobs</li>
                <li>Update Jobs</li>
            </ul>
        </div>

        <!-- Admin Actions Cards -->
        <div class="cards">
            <div class="card">
                <div class="card-icon">
                    <i class="fas fa-briefcase"></i>
                </div>
                <div>Post Jobs</div>
            </div>
            
            <div class="card">
                <div class="card-icon">
                    <i class="fas fa-tasks"></i>
                </div>
                <div>Manage Job Postings</div>
            </div>

            <div class="card">
                <div class="card-icon">
                    <i class="fas fa-comments"></i>
                </div>
                <div>Moderate Content</div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer" style="margin-top: 5.5rem;">
        &copy; 2024 IST Alumni System. All rights reserved.
    </div>

    <!-- Scripts -->
    <script>
        function toggleDropdown() {
            document.querySelector('.dropdown-menu').classList.toggle('show');
        }
    </script>
</x-app-layout>
