<div class="row mt-5">
    <h1>Добавить товар</h1>
</div>
<div class="row">
    <form action="../../engine/server.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="title">Название товара</label>
            <input type="text" class="form-control" id="title" name="title" aria-describedby="title">
        </div>
        <div class="form-group">
            <label for="description">Краткое описание товара</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>
        <div class="form-group">
            <label for="full_description">Полное описание товара</label>
            <textarea class="form-control" id="full_description" name="full_description"></textarea>
        </div>
        <div class="form-group">
            <label for="price">Цена товара</label>
            <input type="number" class="form-control" id="price" name="price" aria-describedby="price">
        </div>
        <div class="form-group">
            <label for="image">Картинка</label>
            <input type="hidden" name="MAX_FILE_SIZE" value="3000000"/>
            <input type="file" accept="image/*" class="form-control" name="image">
        </div>
        <input type="submit" class="btn btn-primary" value="Добавить" name="add_good">
    </form>
</div>
