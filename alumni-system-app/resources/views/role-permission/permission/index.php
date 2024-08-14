<x-app-web-layout>
    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">IST Alumni System</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto" style="display: flex; margin-left: 70%; list-style: none; margin-top: -0.5rem;">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('profile') }}">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}" 
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                           
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center" style="display: flex;">
                        <h4 class="mb-0">Permissions</h4>
                        <a href="{{ route('permission-create') }}" class="btn btn-primary">
                            Add Permission
                        </a>
                    </div>
                    <div class="card-body">
                        <!-- Table for displaying data -->
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Permission Name</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Sample data rows; replace with dynamic content -->
                                <tr>
                                    <td>1</td>
                                    <td>Admin</td>
                                    <td>Full access to the system</td>
                                    <td>
                                        <a href="#" class="btn btn-warning btn-sm" style="text-decoration: none;">Edit</a>
                                        <a href="#" class="btn btn-danger btn-sm" style="text-decoration: none; color:crimson;">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Alumni</td>
                                    <td>Can create projects , portfolios, view jobs and view jobs applications</td>
                                    <td>
                                        <a href="#" class="btn btn-warning btn-sm" style="text-decoration: none;">Edit</a>
                                        <a href="#" class="btn btn-danger btn-sm" style="text-decoration: none; color:crimson;">Delete</a>
                                    </td>
                                </tr>
                                <!-- More rows as needed -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Embedded CSS -->
    <style>
        body, html {
            margin: 0;
            padding: 0;
            width: 100%;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            background-color: #11212D; /* Body background color set to white */
        }
        /* Navigation Bar Styling */
        .navbar {
            background-color: white; /* Inherit the background color of the body */
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            margin: 0px;
            border: none;
            padding-top: 1rem;
        }

        .navbar-brand {
            font-weight: bold;
            color: #333;
            transition: color 0.3s ease-in-out;
            text-decoration: none; 
            margin-left: 4rem;
        }

        .navbar-brand:hover {
            color: #007bff;
        }

        .nav-item {
            list-style: none;
            margin-right: 1.5rem;
        }

        .nav-item a {
            text-decoration: none;
        }

        .nav-link {
            font-weight: 500;
            color: #555;
            transition: color 0.3s ease-in-out;
        }

        .nav-link:hover {
            color: #007bff;
        }

        /* Card Styling */
        .card {
            background-color:#f9f9f9;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 3%;
            padding: 3%;
            padding-top: 1%;
        }

        .card-header {
            background-color: #f8f9fa;
            border-bottom: 1px solid #e9ecef;
            font-size: 1.25rem;
            font-weight: bold;
            padding: 1rem;
            color: crimson;
        }

        .btn-primary {
            background-color: #4A5C6A;
            font-size: 16px;
            color: white;
            padding: 10px 20px;
            margin-top: 20px;
            height: 26px;
            margin-left: 65%;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
        }

        /* Table Styling */
        .table {
            width: 100%;
            margin: 0;
            border-collapse: collapse;
        }

        .table th, .table td {
            padding: 0.75rem;
            text-align: left;
            border-bottom: 1px solid #e9ecef;
        }

        .table thead th {
            background-color: #f8f9fa;
            font-weight: bold;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #f9f9f9;
        }

        .btn-sm {
            font-size: 0.875rem;
            padding: 0.375rem 0.75rem;
        }

        /* Animation */
        .card {
            animation: fadeInUp 0.5s ease-in-out;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .navbar {
                padding: 1rem;
            }
        }
    </style>
</x-app-web-layout>
