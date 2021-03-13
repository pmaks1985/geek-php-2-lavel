<?php
include "config.php";

$sql = "select * from reviews ORDER BY date_review DESC";
$res = mysqli_query($connect, $sql);
?>
<div class="row mt-5">
    <h1>Отзывы сайта</h1>
</div>
<? if (!isset($_SESSION['login'])): ?>
    <p class="h5 text-danger mt-4">Отзывы могут оставлять только авторизованные пользователи!</p>
<? endif; ?>
<div class="row flex-column mt-5">
    <div class="col">
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">Дата отзыва</th>
                <th scope="col">Имя</th>
                <th scope="col">Текст отзыва</th>
            </tr>
            </thead>
            <tbody>
            <? while ($data = mysqli_fetch_assoc($res)) { ?>
                <tr>
                    <th scope="row"><?= $data['date_review'] ?></th>
                    <td><?= $data['name'] ?></td>
                    <td><?= $data['text_review'] ?></td>
                </tr>
            <? } ?>
            </tbody>
        </table>
    </div>
    <? if (isset($_SESSION['login'])): ?>
        <div class="row justify-content-end">
            <div class="col-md-4">
                <form action="../engine/server.php" method="post">
                    <div class="form-group">
                        <label for="authors-name"><span class="font-weight-bold">Имя автора</span></label>
                        <input type="text" class="form-control" name="authors-name" placeholder="Иван Иванов">
                    </div>
                    <div class="form-group">
                        <label for="review-text"><span class="font-weight-bold">Текст отзыва</span></label>
                        <textarea class="form-control" name="review-text" rows="3"></textarea>
                    </div>
                    <div class="form-group text-right">
                        <input type="submit" name="review-button" value="Оставить отзыв" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    <? endif; ?>
</div>
