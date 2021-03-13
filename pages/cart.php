<?php
include "config.php";

$sql = "select * from basket";
$res = mysqli_query($connect, $sql);
?>
<div class="row mt-5">
    <h1>Корзина покупок</h1>
</div>
<div class="row flex-column mt-5">
    <div class="col">
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">Название товара</th>
                <th scope="col">Стоимость товара</th>
                <th scope="col">Количество товаров</th>
                <th scope="col">Действие</th>
            </tr>
            </thead>
            <tbody>
            <? while ($data = mysqli_fetch_assoc($res)) { ?>
                <tr>
                    <th scope="row"><?= $data['date_review'] ?></th>
                    <td><?= $data['name'] ?></td>
                    <td><?= $data['text_review'] ?></td>
                    <td><?= $data['text_review'] ?></td>
                </tr>
            <? } ?>
            </tbody>
        </table>
    </div>