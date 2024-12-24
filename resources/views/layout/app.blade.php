<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Library Management')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .sidebar {
            height: 100vh;
            width: 250px;
            background-color: #f8f9fa;
            position: fixed;
            padding-top: 20px;
        }

        .sidebar a {
            color: #000;
            text-decoration: none;
            padding: 10px 20px;
            display: block;
        }

        .sidebar a:hover {
            background-color: #e9ecef;
            border-radius: 5px;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
        }

        .footer {
            background-color: #f8f9fa;
            padding: 10px;
            text-align: center;
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }

            .content {
                margin-left: 0;
            }
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <div class="text-center mb-3">
            <i class="fas fa-book fa-2x"></i>
            <h5>Library Management</h5>
        </div>
        <a href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a>
        <a href="{{ route('books.index') }}"><i class="fas fa-book"></i> Books</a>
        <a href="{{ route('readers.index') }}"><i class="fas fa-users"></i> Readers</a>
        <a href="{{ route('borrows.index') }}"><i class="fas fa-hand-holding"></i> Borrow/Return</a>
    </div>
    <div class="content">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Dashboard</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-user"></i> Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-sign-out-alt"></i> Logout</a>
                        </ul>
                </div>
            </div>
        </nav>

        <!-- Content Section -->
        <div class="container mt-4">
            @yield('content') <!-- Nơi chèn nội dung của các trang con -->
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2024 Library Management. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
