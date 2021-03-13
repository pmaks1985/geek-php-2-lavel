<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/config.php";

$sql = "select * from catalog order by id desc";
$res = mysqli_query($connect, $sql);
?>
<div class="row my-5">
    <h1>Админка</h1>
</div>
<div class="row">
    <p>
        <a href="../../index.php?page=add_good" class="btn btn-primary">Добавить новый товар</a>
    </p>
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">Товар</th>
            <th scope="col">Действие</th>
        </tr>
        </thead>
        <tbody>
        <?php while ($good = mysqli_fetch_assoc($res)): ?>
            <tr>
                <td scope="row">
                    <div class="d-flex">
                        <img src="/images/<?= $good['path_to_picture'] ?>" alt="<?= $good['path_to_picture'] ?>"
                             style="width: 200px;">
                        <p class="font-weight-bold h5 px-3"><?= $good['title'] ?></p>
                        <span><?= $good['description'] ?></span>
                    </div>

                </td>
                <td>
                    <p>
                        <a href="<? $_SERVER['DOCUMENT_ROOT'] ?>/index.php?page=edit_good&id=<?= $good['id'] ?>" class="btn
                        btn-primary">Изменить</a> <!--edit_goods.php?id=<= $good['id'] ?>-->
                    </p>
                    <p>
                        <a href="../../engine/server.php?delete-good=true&id=<?= $good['id'] ?>"
                           class="btn btn-primary">Удалить</a>
                    </p>
                </td>
            </tr>
        <? endwhile; ?>
        </tbody>
    </table>
</div>
