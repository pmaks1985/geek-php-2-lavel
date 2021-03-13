<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/config.php";
$sql = "select id_good, title,price*count as sum,count from catalog inner join basket ON basket.id_good = catalog.id and id_user=" . $_SESSION['id_user'];
$res = mysqli_query($connect, $sql);
?>
<div class="row my-5">
    <h1>Корзина</h1>
</div>
<div class="row">
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">Название товара</th>
            <th scope="col">Количество товара</th>
            <th scope="col">Цена</th>
            <th scope="col">Действие</th>
        </tr>
        </thead>
        <tbody>
        <?php while ($data = mysqli_fetch_assoc($res)): ?>
            <tr>
                <td scope="row">
                    <?= $data['title']?>
                </td>
                <td>
                    <input id="good_<?= $data['id_good']?>" style="width:40px;" type="number" value="<?= $data['count']?>">
                </td>
                <td>
                    <?= $data['sum']?>
                </td>
                <td>
                    <a href="#" onclick="save(<?= $data['id_good']?>)">Купить</a>
                </td>
            </tr>
        <? endwhile; ?>
        </tbody>
    </table>
</div>

