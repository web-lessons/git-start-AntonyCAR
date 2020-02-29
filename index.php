<?php
 require_once "config/db.php";
 require_once "template/header.php";

 $query = "SELECT * FROM `products`";
 $result = mysqli_query($mysqli, $query);
 var_dump($result);
 $products = array(
    0 => array(
        "name" => "Товар 1",
        "img" => "https://quke.ru/UserFiles/Landing/products/59690_photos_0.jpeg",
        "description" => "Описание Товара",
        "url" => "/",
    ),
    1 => array(
        "name" => "Товар 1",
        "img" => "https://quke.ru/UserFiles/Landing/products/59690_photos_0.jpeg",
        "description" => "Описание Товара",
        "url" => "/",
    ),
    2 => array(
        "name" => "Товар 1",
        "img" => "https://quke.ru/UserFiles/Landing/products/59690_photos_0.jpeg",
        "description" => "Описание Товара",
        "url" => "/",
    ),
    3 => array(
        "name" => "Товар 1",
        "img" => "https://quke.ru/UserFiles/Landing/products/59690_photos_0.jpeg",
        "description" => "Описание Товара",
        "url" => "/",
    ),
    4 => array(
        "name" => "Товар 1",
        "img" => "https://quke.ru/UserFiles/Landing/products/59690_photos_0.jpeg",
        "description" => "Описание Товара",
        "url" => "/",
    ),
    5 => array(
        "name" => "Товар 1",
        "img" => "https://quke.ru/UserFiles/Landing/products/59690_photos_0.jpeg",
        "description" => "Описание Товара",
        "url" => "/",
    ),
    6 => array(
        "name" => "Товар 1",
        "img" => "https://quke.ru/UserFiles/Landing/products/59690_photos_0.jpeg",
        "description" => "Описание Товара",
        "url" => "/",
    ),
    7 => array(
        "name" => "Товар 1",
        "img" => "https://quke.ru/UserFiles/Landing/products/59690_photos_0.jpeg",
        "description" => "Описание Товара",
        "url" => "/",
    ),
);

?>
    <img src="samsungs.jpg">
    
    <div class="row">
    <? foreach ($products as $key => $product):?>
        <div class="col">
            <div class="square">
                <img src="https://quke.ru/UserFiles/Landing/products/59690_photos_0.jpeg" alt="" width="150"
                    height="170" class="d-inline-block align-top">
                <h2>samSung Galaxy A10</h2><br>
                <a class="btn-buy" href=""><button>Купить</button></a>
            </div>
        </div>
        <? endforeach; ?>
    </div>

<?php
 include_once "template/footer.php";
?>