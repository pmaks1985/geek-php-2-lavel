<script>
    window.onload = function () {
        document.getElementById('buy').onclick = function () {
            document.getElementById('buy').style.display = "none";
            document.getElementById('buying_form').style.display = "block";
        };
    }
</script>

<div class="row mt-5">
    <? if (!$user_id): ?>
        <div class="h5 text-danger mb-4 col-12">Товары можно приобрести только авторизованным пользователям</div>
    <? endif; ?>
    <h1><?= $product["title"] ?></h1>

</div>
<div class="row mt-5">
    <div class="col">
        <img src="/images/big/<?= $product["image"] ?>" alt="">
    </div>
    <div class="col">
        <p><?= $product["content"] ?></p>
        <div class="text-danger h2"><?= $product["price"] ?> ye</div>
        <div class="ml-3 d-flex justify-content-end">
            <? if ($user_id): ?>
                <button id='buy' class="btn btn-primary" style="display: block">Купить</button>
                <div id='buying_form' style="display: none">
                    <span>Какое количество товара?</span>
                    <form method='post' name='buying_form'>
                        <input type='number' name='count' required>
                        <input type='submit' name='button' class="btn btn-primary" value='Добавить в корзину'>
                    </form>
                </div>
            <? endif; ?>
        </div>
    </div>
</div>
