<?php
 require_once "config/db.php";
 require_once "template/header.php";

 $query = "SELECT * FROM `products`";
 $result = mysqli_query($conn, $query);
 $products = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>
    <img src="samsungs.jpg">
    
    <div class="row">

    <? foreach ($products as $key => $product):?>
        <div class="col">
            <div class="card">
                <img src="<?php echo $product ['img']?>" alt="" width="150"
                    height="200" class="card-img-top">
                    <div class="card-body">
                        <h2 class="card-title"><?= $product ['name']?></h2>
                        <p class="card-text"><?= $product ['description']?></p>
                        <p class="card-text"><?= $product ['price']?> $</p>
                        <a href="/product.php?id=<?= $product['id']?>">Подробнее</a>
                        <a class='btn btn-danger' href="/delete.php?id=<?= $product['id']?>">DELETE</a>
                    </div>
            </div>
        </div>
        <? endforeach; ?>
    </div>

<?php
 include_once "template/footer.php";
?>