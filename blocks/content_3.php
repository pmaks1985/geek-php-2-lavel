<?php
$dir1 = "image/small";
$dir2 = "image/big";
$files1 = array_slice(scandir($dir1), 2);
$files2 = array_slice(scandir($dir2), 2);
?>
<div class="col-md-10">
    <div class="d-flex flex-wrap">
        <?php
        for ($i = 0; $i < count($files1); $i++) { ?>
            <a class="photo" href="<?= $dir2 . "/" . $files2[$i] ?>" target="_blank"><img src="<?= $dir1 . "/" . $files1[$i] ?>" alt="" /></a>
        <?php } ?>
    </div>
</div>