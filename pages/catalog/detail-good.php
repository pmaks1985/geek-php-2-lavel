<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/config.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/engine/functions.php";

session_start();

$id = $_GET['id'];
if ($id) {
    $sql = "SELECT * FROM catalog WHERE id=$id";
}
if (mysqli_query($connect, $sql)) {
    $res = mysqli_fetch_assoc(mysqli_query($connect, $sql));
}
?>
<div class="row">
    <?php
    if (!isset($_SESSION['login'])) {
        ?>
        <p class="h5 text-danger mt-4">Товары можно приобрести только авторизованным пользователям</p>
        <?php
    }
    if (isset($_GET['success'])) {
        if ($_GET['success'] === 'ok') {
            echo "<p class='h5 text-success mt-4'>Товар успешно добавлен в корзину!</p>";

        } else {
            echo "<h2>Ошибка при добавлении товара</h2>";
        }
    }
    ?>
</div>
<div class="row mt-5">
    <h1><?= $res['title']; ?></h1>
</div>
<div class="row mt-5">
    <div class="col">
        <img src="/images/big/<?= $res['path_to_picture']; ?>" alt="">
    </div>
    <div class="col">
        <p><?= $res['full_description']; ?></p>
        <div class="text-danger h2"><?= $res['price']; ?> ye</div>
        <div class="text-right ml-3">
            <? if (isset($_SESSION['login'])): ?>
                <a href="<?= $_SERVER['[DOCUMENT_ROOT]'] . "/engine/goods.php?id=" . $res['id'] . "&user-id=" . $_SESSION['id_user'] ?>"
                   class="btn btn-primary">Купить</a>
            <? endif; ?>
        </div>
    </div>
</div>
