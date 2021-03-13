<div class="row justify-content-center">
    <div class="col-md-4">
        <form method="post" id="form">
            <div class="form-group">
                <label for="login"><span class="font-weight-bold">Ваше имя:</span></label>
                <input type="text" class="form-control" name="login" placeholder="Иван Иванов">
            </div>
            <div class="form-group">
                <label for="pass"><span class="font-weight-bold">Ваш пароль:</span></label>
                <input type="password" class="form-control" name="password">
            </div>
            <div class="form-group text-right">
                <input type="submit" value="Войти" class="btn btn-primary">
            </div>
        </form>
        <div id="hi" class="mt-5 h4" style="display: none">
            Перейти на <a href="/">главную</a>
        </div>
    </div>
</div>
<?php if (isset($text)) : ?>
    <script>
        document.getElementById('form').style.display = 'none';
        document.getElementById('hi').style.display = 'block';
    </script>
<? endif; ?>