<?php
 require_once "config/db.php";
 require_once "template/header.php";

 $query = 'SELECT * FROM `products` WHERE id='.$_GET['id'];
 $result = mysqli_query($conn, $query);
 $products = mysqli_fetch_array($result);

?>
    <div class='container mt-4 mb-5'>
        <div class='row'>
            <div class='col-md-6'>
                <img class='img-fluid' src="<?= $products['img']?>" alt="">
            </div>
            <div class='col-md-6'>
                <h1><?= $products['name']?></h1>
                <p><?= $products['description']?></p>
                <h2><?= $products['price']?></h2>
                <button class="btn btn-success">Купить</button>
            </div>
        </div>
    </div>