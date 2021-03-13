<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/config.php";

$idGood = $_GET['id'];
$userId = $_GET['user-id'];

$sql = "select * from basket where id_good = '$idGood' and id_user='$userId'";
$res = mysqli_query($connect, $sql);

if(mysqli_num_rows($res) > 0){
    $s = "UPDATE basket SET count=count+1 WHERE id_good='$idGood'";
    $res = mysqli_query($connect,$s);

}
else{
    $s = "INSERT INTO basket (id_good, count, id_user) VALUES ('$idGood', 1, '$userId')";
    $res = mysqli_query($connect,$s);

}

if($res) {
    header("Location: /?page=detail-good&success=ok&&id=" . $idGood);
}
//$sql = "INSERT INTO basket (id_good, count, id_user) VALUES ('$idGood', 1, '$userId')";
//if (mysqli_query($connect, $sql)) {
//    header("Location: /?page=detail-good&success=ok&&id=" . $idGood);
//}
