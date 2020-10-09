<?php
require_once __DIR__ ."/../template/header.php";
$sql_category = 'SELECT * FROM category';
$result3 = mysqli_query($conn, $sql_category);
$category_list = mysqli_fetch_all($result3, MYSQLI_ASSOC);
?> 
<?php
if (!empty($_POST)):

    if (!empty($_FILES['img']['name'])):
        $ext = pathinfo($_FILES['img']['name'], PATHINFO_EXTENSION); #получаем расширение из имени файла
        $fileName = uniqid().".".$ext;
        $uploadFile = __DIR__."/../../img/".$fileName;
        move_uploaded_file($_FILES['img']['tmp_name'], $uploadFile);
    endif;

    $id_category = $_POST['id_category'];
    $name = $_POST['name'];
    $slug = $_POST['slug'];
    $img = empty($fileName) ? null : "/img/".$fileName;
    $price = empty($_POST['price']) ? 0 : $_POST['price'];
    $description = empty($_POST['description']) ? null : $_POST['description'];

    if (!empty($_POST['id'])):
        
        $addImg = "img='{$img}', ";

        if (empty($img)) {
            $addImg = "";
        }

        $sql = "UPDATE products 
                 SET id_category = {$id_category}, name='{$name}', slug='{$slug}', ".$addImg."  description='{$description}', price={$price} 
                 WHERE id=".$_POST['id'];
    else:
        $sql = "INSERT INTO products (id_category, name, slug, img, description, price)
        VALUES ({$id_category},'{$name}', '{$slug}', '{$img}', '{$description}', {$price})";
    endif;

    $result = mysqli_query($conn, $sql);
endif;
if (!empty($_GET['id'])):
    $query = 'SELECT * FROM `products` WHERE id='.$_GET['id'];
    
    $result2 = mysqli_query($conn, $query);

    if($result2 === false) {
        die("Ошибка сервера");
    }
    
    $product = mysqli_fetch_array($result2);
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
                <? if (!empty($product)): ?>
                    <input type="hidden" name="id" value="<?= $product['id']?>">
                <? endif; ?>
                <p>Категория *</p>
                <select required class='form-control' name="id_category" >
                    <? foreach($category_list as $category) : ?>
                        <option <?= (!empty($product) and $product['id_category'] == $category['id'] ) ? "selected" : "" ?> value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
                    <? endforeach; ?>
                </select>
                <p>Название *</p>
                <input required class='form-control' type="text" id="name" <?= empty($product) ? "" : "value ='".$product['name']."'"?> name="name">  

                <p>Код *</p>
                <input required class='form-control' type="text" id="slug" <?= empty($product) ? "" : "value ='".$product['slug']."'"?> name="slug">

                <p>Цена</p>
                <input class='form-control' type="number" id="price" <?= empty($product) ? "" : "value ='".$product['price']."'"?> name="price">

                <p>Картинка</p>
                <? if (!empty($product['img'])): ?>
                    <img class="img-thumbnail" width="90px;" src="<?= $product['img'] ?>"><br>
                <? endif; ?>
                <input  type="file" id="img" name="img">

                <p>Описание</p>
                <textarea class='form-control' cols="80" rows="5" id="description" name="description"><?= empty($product) ? "" : $product['description']?></textarea><br>

                <button class="btn btn-success">Добавить</button>
            </form>
        </div>
    </div>
</div>

<?php
include_once __DIR__ ."/../template/footer.php";
?>