<div class="row mt-5">    <h1>Авторизация пользователя</h1>    <h3><? if (isset($text)): ?>            <?= "Вы успешно авторизированы!"; ?>        <? endif; ?>    </h3></div><form method="post">    <input type="text" name="login" placeholder="Введите логин" required>    <input type="password" name="password" placeholder="Введите пароль" required>    <input type="submit" name="button" value="Войти"></form>