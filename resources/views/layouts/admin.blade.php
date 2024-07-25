<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #e9d3c2; /* Arka plan rengi */
        }
        .navbar {
            background-color: rgb(233, 150, 73); /* Navbar arka plan rengi */
        }
        .navbar-brand {
            color: white !important;
            font-weight: bold;
        }
        .navbar-nav .nav-link {
            color: white !important;
        }
        .navbar-nav .nav-link:hover {
            color: #f98c26 !important;
        }
        .navbar-toggler {
            border-color: white;
        }
        .logout-btn, .dashboard-btn {
            background-color: #2f6c20; /* Buton rengi */
            border: none;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            font-weight: bold;
            margin-left: 10px;
        }
        .logout-btn:hover, .dashboard-btn:hover {
            background-color: #2f6c20; /* Hover sırasında kullanılacak renk */
        }
        .center {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <header class="my-4">
            <h1 class="center">Admin Panel</h1>
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="{{ route('admin.adminDashboard') }}">Admin Dashboard'a dön</a>
                <div class="ml-auto">
                    <a class="dashboard-btn" href="{{ route('admin.adminDashboard') }}">Dashboard'a Dön</a>
                    <a class="logout-btn" href="{{ route('logout') }}">Çıkış Yap</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
        </header>

        <main>
            @yield('content')
        </main>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
