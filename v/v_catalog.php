<div class="row mt-5">
    <h1>Каталог товаров</h1>
</div>
<div class="row mt-5">
    <? if (isset($catalog)) : ?>
        <? foreach ($catalog as $product): ?>
            <div class="card mr-3" style="width: 18rem;">
                <img src="/images/<?= $product["image"] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $product["title"] ?></h5>
                    <p class="card-text" style="min-height: 100px;"><?= $product['content'] ?></p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item text-bold">Цена: <b><?= $product['price'] ?> ye</b></li>
                    </ul>
                    <p class="card-text text-right">
                        <a href="index.php?c=page&act=product&id=<?= $product["id"] ?>" class="btn btn-primary">Подробнее</a>
                    </p>
                </div>
            </div>
        <? endforeach; ?>
    <? endif; ?>
</div>