<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="?page=catalog">Каталог товаров</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?page=reviews">Отзывы</a>
            </li>
            <? if (!isset($_SESSION['login'])): ?>
                <li class="nav-item">
                    <a class="nav-link" href="?page=reg">Регистрация</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=auth">Войти</a>
                </li>
            <? else: ?>
                <li class="nav-item">
                    <a class="nav-link" href="?page=exit">Выйти</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=basket">Корзина</a>
                </li>
            <? endif; ?>
            <? if (isset($_SESSION['admin'])): ?>
                <li class="nav-item">
                    <a class="nav-link text-danger" href="?page=admin">Админка</a>
                </li>
            <? endif; ?>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Поиск" aria-label="Search">
            <button class="btn my-2 my-sm-0 btn-outline-primary" type="submit">Поиск</button>
        </form>
    </div>
</nav>
