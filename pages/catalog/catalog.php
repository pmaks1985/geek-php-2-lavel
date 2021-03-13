<?php
include "config.php";

$sql = "select * from catalog";
$res = mysqli_query($connect, $sql);
?>
<div class="row mt-5">
    <h1>Каталог товаров</h1>
</div>
<div class="row mt-5">
    <? while ($data = mysqli_fetch_assoc($res)) { ?>
        <div class="card mr-3" style="width: 18rem;">
            <img src="/images/<?= $data['path_to_picture'] ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?= $data['title'] ?></h5>
                <p class="card-text" style="min-height: 100px;"><?= $data['description'] ?></p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item text-bold">Цена: <b><?= $data['price'] ?> ye</b></li>
                </ul>
                <p class="card-text text-right">
                    <a href="?page=detail-good&id=<?= $data['id'] ?>" class="btn btn-primary">Подробнее</a>
                </p>
            </div>
        </div>
    <? } ?>
</div>