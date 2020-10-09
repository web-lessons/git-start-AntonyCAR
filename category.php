<?php
require_once "template/header.php";

$query = 'SELECT * FROM `products` WHERE id_category=' . $_GET['id_category'];
$result = mysqli_query($conn, $query);
$products = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
    <? $j = 1; 
       $count = 0; ?>
    <? foreach ($products as $key => $product): ?>
        <? if ($j == 1) {
            echo "<div class=\"row mt-3 mb-3\">";
        } ?>
        <div class='col-3'>
            <div class='card'>
            <img src="<?php echo $product ['img']?>" alt="" width="150"height="180" class="card-img-top">
                <div class="card-body">
                    <h4 class="card-title"><?= $product ['name']?></h4>
                    <h5 class="card-text"><?= $product ['price']?> ₽</h5>
                    <a href="/product.php?id=<?= $product['id'] ?>">Подробнее</a>
                </div>
            </div>
        </div>
        <? $count++;
        if ($j == 4 or $count >= count($products)) {
            echo "</div>";
            $j = 0;
        }
        $j++; ?>
    <? endforeach; ?>
<?php
require_once "template/menu.php";
require_once "template/footer.php";
?>