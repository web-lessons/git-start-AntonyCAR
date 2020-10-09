<?php
$query = "SELECT * FROM `category`";
$result = mysqli_query($conn, $query);
$categories = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<div class='row'>
    <div class='col-12'>
        <h4> Если вы хотите посмотреть наш каталог экскурсий, то переходите здесь: </h4>
        <ul type="disk">
            <?php foreach ($categories as $key => $category) : ?>
                <li>
                    <h5><a href='/category.php?id_category=<?= $category['id'] ?>'><?= $category['name'] ?></a></h5>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>