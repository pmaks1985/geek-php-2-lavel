<script>
    window.onload = function () {
        document.getElementById('buy').onclick = function () {
            document.getElementById('buy').style.display = "none";
            document.getElementById('buying_form').style.display = "block";
        };
    }
</script>

<?php if (isset($text)): ?>
    <script>alert('$text')</script>
<? endif; ?>

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
        <div class="text-right ml-3">
            <? if ($user_id): ?>
                <button id='buy' class="btn btn-primary">Купить</button>
            <? endif; ?>
        </div>
    </div>
</div>
