<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="scripts/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script type="text/javascript" src="scripts/fancybox/jquery.mousewheel-3.0.4.js"></script>
    <script type="text/javascript" src="scripts/fancybox/jquery.fancybox-1.3.4.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".photo").fancybox();
        });
    </script>
    <title>Geek-php</title>
</head>

<body>
    <div class="container">
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
    </div>





</body>

</html>