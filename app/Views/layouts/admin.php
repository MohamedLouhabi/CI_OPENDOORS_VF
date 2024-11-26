<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <style>
        /* General Styles */
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
            margin: 0;
            padding-top: 70px; /* To offset fixed navbar */
        }

        /* Navbar Styles */
        .navbar {
            background: linear-gradient(135deg, #2c3e50, #4ca1af);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-bottom: 3px solid #ff4757;
        }

        .navbar-brand {
            font-size: 1.8rem;
            font-weight: bold;
            color: #fff;
        }

        .navbar-brand span {
            color: #ff4757;
        }

        .navbar-nav .nav-link {
            font-size: 1rem;
            color: #ffffff;
            transition: all 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            color: #ff4757;
            transform: scale(1.1);
        }

        .dropdown-menu {
            background-color: #4ca1af;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .dropdown-menu .dropdown-item {
            color: #ffffff;
            font-size: 0.9rem;
        }

        .dropdown-menu .dropdown-item:hover {
            background-color: #ff4757;
            color: #ffffff;
        }

        /* Sidebar (if applicable) */
        .side-nav {
            list-style: none;
            padding-left: 0;
            margin: 0;
        }

        .side-nav .nav-item {
            margin: 10px 0;
        }

        .side-nav .nav-link {
            font-size: 1rem;
            color: #ffffff;
            padding-left: 20px;
            transition: all 0.3s ease;
        }

        .side-nav .nav-link:hover {
            color: #ff4757;
            transform: translateX(10px);
        }

        /* Main App Container */
        .app {
            margin-top: 20px;
            padding: 30px;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
        }

        .app h1 {
            font-size: 2rem;
            color: #2c3e50;
            text-align: center;
            margin-bottom: 20px;
        }

        /* Button Styles */
        .btn-custom {
            background: linear-gradient(135deg, #4ca1af, #2c3e50);
            color: #fff;
            border: none;
            border-radius: 30px;
            padding: 10px 20px;
            transition: all 0.3s ease;
        }

        .btn-custom:hover {
            background: linear-gradient(135deg, #2c3e50, #ff4757);
            transform: scale(1.1);
            color: #fff;
        }
    </style>
</head>
<body>
<div id="wrapper">
    <nav class="navbar header-top fixed-top navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#"><strong>OpenDoors<span>.</span></strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarText">
                <?php if(isset($session)): ?>
                <ul class="navbar-nav side-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= url_to('admins.index') ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= url_to('admins.all') ?>">Admins</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= url_to('home.types.all') ?>">Hometypes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= url_to('props.all') ?>">Properties</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= url_to('requests.all') ?>">Requests</a>
                    </li>
                </ul>
                <?php endif; ?>

                <ul class="navbar-nav ml-md-auto d-md-flex">
                    <?php if(isset($session)): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= url_to('admins.index') ?>">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?= $session->name; ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?= url_to('admins.logout') ?>">Logout</a>
                        </div>
                    </li>
                    <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= url_to('admins.login') ?>">Login</a>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="app">
            <h1>Welcome to the Admin Panel</h1>
            <?= $this->renderSection('content'); ?>
        </div>
    </div>
</div>
</body>
</html>
