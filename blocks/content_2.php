<div class="col-md-10">
    <div class="d-flex flex-wrap">
        <?php
        $images = scandir("image/small/");
        for ($i = 2; $i < count($images); $i++) { ?>
            <a href="full_images_2.php?file=<?= $images[$i]; ?>">
                <img src="/image/small/<?= $images[$i]; ?>" id="<?= $i ?>">
            </a>

        <?php
        }
        ?>
    </div>
</div>