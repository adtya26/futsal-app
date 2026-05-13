<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Futsal App</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        body {
            background: linear-gradient(to bottom, #014b66, #0694c9);
            min-height: 100vh;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
        }

        .phone-container {
            max-width: 420px;
            margin: auto;
            min-height: 100vh;
            padding: 20px;
            padding-bottom: 90px;
        }

        /* TOP BAR */
        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .top-title {
            font-size: 22px;
            font-weight: bold;
        }

        /* CARD */
        .card-custom {
            background: white;
            border-radius: 20px;
            padding: 20px;
            color: black;
        }

        /* BUTTON */
        .btn-custom {
            background: #67b9e8;
            border: none;
            border-radius: 30px;
            padding: 12px;
            color: white;
            font-weight: bold;
        }

        /* BOTTOM NAV */
        .menu-bottom {
            position: fixed;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100%;
            max-width: 420px;
            background: #06384a;
            display: flex;
            justify-content: space-around;
            padding: 12px 0;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
        }

        .menu-bottom a {
            color: white;
            text-decoration: none;
            font-size: 24px;
            opacity: 0.6;
            background: transparent;
            border: none;
            box-shadow: none;
        }

        .menu-bottom a.active {
            opacity: 1;
            color: #ffffff;
        }

        input {
            border-radius: 15px !important;
            padding: 15px !important;
        }

        .activity-box {
            background: #0a3f56;
            border-radius: 20px;
            padding: 20px;
        }
    </style>
</head>

<body>

<div class="phone-container">

    <!-- TOP BAR -->
    <div class="top-bar">
        <div class="top-title">Futsal App</div>

        <a href="/profile"
           class="text-decoration-none d-flex justify-content-center align-items-center"
           style="
                width:45px;
                height:45px;
                background:white;
                border-radius:50%;
                font-size:22px;
                box-shadow:0 2px 8px rgba(0,0,0,0.15);
           ">
            👤
        </a>
    </div>

    <!-- CONTENT -->
    @yield('content')

</div>

<!-- BOTTOM NAV -->
<div class="menu-bottom">

    <a href="/dashboard" class="{{ request()->is('dashboard') ? 'active' : '' }}">
        <i class="bi bi-house-door-fill"></i>
    </a>

    <a href="/match-detail" class="{{ request()->is('match-detail') ? 'active' : '' }}">
        <i class="bi bi-calendar-event"></i>
    </a>

    <a href="/profile" class="{{ request()->is('profile') ? 'active' : '' }}">
        <i class="bi bi-person-circle"></i>
    </a>

    <a href="#">
        <i class="bi bi-gear"></i>
    </a>

</div>

</body>
</html>