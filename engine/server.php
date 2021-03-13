<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/config.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/engine/functions.php";

if (isset($_POST['authors-name']) && isset($_POST['review-text'])) {
    addingReview($connect, $_POST['authors-name'], $_POST['review-text']);
}

if (isset($_POST['login']) && isset($_POST['pass'])) {
    regUser($connect, $_POST['login'], $_POST['pass']);
}

if (isset($_GET['delete-good']) && isset($_GET['id'])) {
    deleteGood($connect, $_GET['id']);
}

if (isset($_POST['add_good'])) {
    addingGood($connect, $_POST['title'], $_POST['description'], $_POST['full_description'], $_POST['price']);
}

if (isset($_POST['registration'])) {
    addingUser($connect, $_POST['fio'], $_POST['phone'], $_POST['user-login'], $_POST['user-pass'], $_POST['address']);
}

if (isset($_POST['edit-good'])) {
   updateGood($connect, $_POST['title'], $_POST['description'], $_POST['full_description'], $_POST['price'], $_POST['image'], $_GET['id']);
}