<?php
require_once "config/db.php";
require_once "template/header.php";
?>
<?php
if (!empty($_POST)):

    if (!empty($_FILES['img']['name'])):
        $ext = pathinfo($_FILES['img']['name'], PATHINFO_EXTENSION);
        $fileName = uniqid().".".$ext;
        $uploadFile = __DIR__."/img/".$fileName;
        move_uploaded_file($_FILES['img']['tmp_name'], $uploadFile);
    endif;

    $name = $_POST['name'];
    $slug = $_POST['slug'];
    $img = empty($fileName) ? null : "/img/".$fileName;
    $price = empty($_POST['price']) ? 0 : $_POST['price'];
    $description = empty($_POST['description']) ? null : $_POST['description'];

    $sql = "INSERT INTO products (name, slug, img, description, price)
        VALUES ('{$name}', '{$slug}', '{$img}', '{$description}', {$price})";
    $result = mysqli_query($conn, $sql);
endif;
?>
<div class="container">
    <? if (!empty($_POST)):?>
        <? if ($result): ?>
            <div class="alert alert-success mt-4" role="alert">
                Успешно создана новая запись
            </div>
        <? else: ?>
            <div class="alert alert-danger mt-4" role="alert">
                Ошибка <?php echo $sql; ?><br><?php echo mysqli_error($conn);?>
            </div>
        <? endif; ?>
    <? endif; ?>
    <div class="row">
        <div class="col-md-6">
            <h1>Создание товара</h1>
            <form class="mb-4" method="post" enctype="multipart/form-data">
                <p>Название *</p>
                <input type="text" id="name" name="name">
                <p>Код *</p>
                <input type="text" id="slug" name="slug">
                <p>Цена</p>
                <input type="number" id="price" name="price">
                <p>Картинка</p>
                <input type="file" id="img" name="img">
                <p>Описание</p>
                <textarea cols="80" rows="5" id="description" name="description"></textarea><br>
                <button>Добавить</button>
            </form>
        </div>
    </div>
</div>

<?php
include_once "template/footer.php";
?>