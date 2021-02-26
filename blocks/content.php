<div class="col-md-10">
    <div class="d-flex flex-wrap">
        <?php
        $images = scandir("images");
        for ($i = 2; $i < count($images); $i++) { ?>
            <a href="full_images.php?file=<?= $images[$i]; ?>">
                <img src="/images/<?= $images[$i]; ?>" id="<?= $i ?>">
            </a>

        <?php
        }
        ?>
    </div>
</div>