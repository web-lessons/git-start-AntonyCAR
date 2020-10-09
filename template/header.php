<?php
require_once __DIR__."/../config/db.php";
require_once __DIR__."/../core/function.php";

if (!empty($_POST['login']) and !empty($_POST['password'])) {
    login($_POST['login'], $_POST['password'], $conn);
}
$query = "SELECT * FROM `category`";
$result = mysqli_query($conn, $query);
$categories = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/template/css/style.css">
    <title>ЭкSкурсии По Новосибирску</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-green">
        <div class="container">
        <a class="navbar-brand" href="/index.php">
            Эк
            <img src="https://steamuserimages-a.akamaihd.net/ugc/83722391146447026/AB7E9ADD7039A0163986BF6955404EE0FE17A768/" width="30" height="30" class="d-inline-block align-top" alt="">
            курсии по Новосибирску
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-link active">
                        <a class="nav-link" href="/index.php">Главная<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-link dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Каталог
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <div class="row">
                                <?php foreach ($categories as $key => $category) : ?>
                                    <a class="dropdown-item" href="/category.php?id_category=<?= $category['id'] ?>"><?= $category['name'] ?></a>
                                    <div class="dropdown-divider"></div>
                                <?php endforeach; ?> 
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto justify-content-end ">
                    <?php if (isLogin()) : ?>
                        <li class="nav-link active"><a class="nav-link" href="/admin/">Админка</a></li>
                        <li class="nav-link active"><a class="nav-link" href="/logout.php">Выход</a></li>
                    <?php else : ?>
                        <li class="nav-link active"><a class="nav-link" href="/login.php">Войти</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
<div class='container'> 