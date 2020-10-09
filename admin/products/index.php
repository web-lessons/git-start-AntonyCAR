<?php
require_once __DIR__ . "/../template/header.php";

$query = "SELECT p.*, c.name AS category_name FROM products p
JOIN category c ON p.id_category = c.id";
$result = mysqli_query($conn, $query);
$products = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Товары</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <a href="/admin/products/edit.php" class="btn btn-success">Добавить</a>
    </div>
</div>
<table class="table">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Картинка</th>
            <th scope="col">Категория</th>
            <th scope="col">Название</th>
            <th scope="col">Цена</th>
            <th scope="col">Описание</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <? foreach ($products as $key => $product) : ?>
            <tr>
                <th scope="row"><?= $product['id'] ?></th>
                <td><img src="<?php echo $product['img'] ?>" alt="" width="35" height="40">
                </td>
                <td><?= $product['category_name'] ?></td>
                <td><a href="edit.php?id=<?= $product['id']?>"><?= $product['name'] ?></a></td>
                <td><?= $product['price'] ?></td>
                <td><?= $product['description'] ?></td>
                <td><a class="btn btn-danger" href="delete.php?id=<?= $product['id']?>">X</a></td>
                <td><a class="btn btn-success" href="edit.php?id=<?= $product['id']?>">Изменить</a></td>
            </tr>
        <? endforeach; ?>
    </tbody>
</table>
<?php require_once __DIR__ . "/../template/footer.php" ?>