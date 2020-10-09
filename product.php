<?php 
require_once "template/header.php";

$query = 'SELECT * FROM `products` WHERE id=' . $_GET['id'];
$result = mysqli_query($conn, $query);
$products = mysqli_fetch_array($result);
?>
<div class='container mt-4 mb-5'>
    <div class='row'>
        <div class='col-md-6'>
            <img class='img-fluid' src="<?= $products['img'] ?>" alt="">
        </div>
        <div class='col-md-6'>
            <h1><?= $products['name'] ?></h1>
            <p><?= $products['description'] ?></p>
            <h2><?= $products['price'] ?> ₽</h2>
            <h4>Укажите количество человек</h4>
            <form method="POST" action="">
                <div class="input-group mb-3">
                    <input type="number" name="quantity" value="1" class="form-control col-3">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-success">Купить</button> 
                    </div>
                </div>
                <input type="hidden" name="product" value="<?= $products['id'] ?>">
            </form>
            <?php//
            //$sqlSearchBasket = "SELECT * FROM order_positions WHERE product_id={$products['id']} AND session_id='".session_id()."'";
            //$resultSearchBasket = mysqli_query($conn, $sqlSearchBasket);

            //if(mysqli_num_rows($resultSearchBasket) > 0){
                //$basketRow = mysqli_fetch_array($resultSearchBasket);
               // echo $basketRow['quantity'];
            //}
            //?>
        </div>
    </div>
</div>
<?php 
require_once "template/footer.php";
?>