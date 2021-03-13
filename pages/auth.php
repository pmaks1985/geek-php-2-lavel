<?php
session_start();
?>
<div class="row justify-content-center">
    <div class="col-md-4">
        <? if ($_GET['success'] && $_SESSION['login']): ?>
            <p class="h5 mt-4 text-success">Ваша учетная запись подтверждена</p>
        <? elseif ($_GET['error']):?>
            <p class="h5 text-danger mt-4">Такого пользователя не существует</p>
        <? endif; ?>
        <form action="../engine/server.php" method="post">
            <div class="form-group">
                <label for="login"><span class="font-weight-bold">Ваше имя:</span></label>
                <input type="text" class="form-control" name="login" placeholder="Иван Иванов" value="<?= $_SESSION['login']?>">
            </div>
            <div class="form-group">
                <label for="pass"><span class="font-weight-bold">Ваш пароль:</span></label>
                <input type="password" class="form-control" name="pass" value="<?= $_SESSION['pass']?>">
            </div>
            <div class="form-group text-right">
                <input type="submit" value="Войти" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>