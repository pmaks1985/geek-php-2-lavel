<div class="row mt-5">
    <h1>Регистрация пользователя</h1>
</div>
<div class="row">
    <form method="post" id="form">
        <div class="form-group">
            <label for="fio">Ваше имя:<sup> *</sup>:</label>
            <input type="text" class="form-control" id="fio" name="name">
        </div>
        <div class="form-group">
            <label for="user-login">Ваш логин:<sup> *</sup>:</label>
            <input type="text" class="form-control" id="user-login" name="login" required>
        </div>
        <div class="form-group">
            <label for="user-pass">Ваш пароль:<sup> *</sup>:</label>
            <input type="password" class="form-control" id="user-pass" name="password" required>
        </div>
        <div class="form-group">
            <small><sup> *</sup>Поля, обязательные для заполнения</small>
        </div>
        <input type="submit" class="btn btn-primary" value="Зарегистрироваться" name="button">
    </form>
</div>
<?php if (isset($text)) {
    echo "<script>alert('$text');document.getElementById('form').style.display = 'none';</script>";
} ?>