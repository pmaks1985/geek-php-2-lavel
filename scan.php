<?php

$images = scandir("images");
for ($i = 2; $i < count($images); $i++) { ?>
    <img src="/images/<?= $images[$i]; ?>">
<?php
}
?>