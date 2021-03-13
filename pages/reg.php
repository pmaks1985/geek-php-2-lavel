<div class="row mt-5">
    <h1>Регистрация пользователя</h1>
</div>
<div class="row">
    <form action="../../engine/server.php" method="post" enctype="multipart/form-data">
        <? if ($_GET['reg-user'] === 'ok'): ?>
            <p class="h5 mt-4 text-success">Доброе пожаловать <?=$_GET['fio'];?>,<br>
                Вы успешно зарегистрировались, <br>
                просьба <a href="/index.php?page=auth">авторизироваться</a> на сайте.</p>
        <? endif; ?>
        <? if (isset($_GET['errors_reg'])): ?>
        <p class='text-danger mt-4'><?= $_GET['errors_reg']; ?>
            <? endif; ?>
        <div class="form-group">
            <label for="fio">Ваше имя:<sup> *</sup>:</label>
            <input type="text" class="form-control" id="fio" name="fio">
        </div>
        <div class="form-group">
            <label for="phone">Ваш телефон:<sup> *</sup>:</label>
            <input type="number" class="form-control" id="phone" name="phone">
        </div>
        <div class="form-group">
            <label for="address">Ваш адрес:</label>
            <textarea class="form-control" id="address" name="address"></textarea>
        </div>
        <div class="form-group">
            <label for="user-login">Ваш логин:<sup> *</sup>:</label>
            <input type="text" class="form-control" id="user-login" name="user-login" required>
        </div>
        <div class="form-group">
            <label for="user-pass">Ваш пароль:<sup> *</sup>:</label>
            <input type="password" class="form-control" id="user-pass" name="user-pass" required>
        </div>
        <div class="form-group">
            <small><sup> *</sup>Поля, обязательные для заполнения</small>
        </div>
        <input type="submit" class="btn btn-primary" value="Зарегистрироваться" name="registration">
    </form>
</div>