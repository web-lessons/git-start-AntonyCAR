<?
require_once __DIR__ . "/../../config/db.php";
?>
<!doctype html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Пример на bootstrap 4: Базовая панель администратора с фиксированной боковой панелью и навигационной панелью.">

    <title>Панель администратора | Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="/admin/template/css/bootstrap.min.css" rel="stylesheet">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
        .bg-green {
            background-color: darkgreen;
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="/admin/template/css/dashboard.css" rel="stylesheet">

</head>

<body>
    <nav class="navbar navbar-dark fixed-top bg-green flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="/admin/index.php">Эк
        <img src="https://steamuserimages-a.akamaihd.net/ugc/83722391146447026/AB7E9ADD7039A0163986BF6955404EE0FE17A768/" width="25" height="25" alt="">
        скурсии</a>
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="/index.php">Выход</a>
            </li>
        </ul>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="/admin/index.php">
                                <span data-feather="home"></span>
                                Главная <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/admin/products/index.php">
                                <span data-feather="shopping-cart"></span>
                                Экскурсии
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">