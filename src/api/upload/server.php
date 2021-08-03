<?php
session_start();

$endpoint = "";
$file = "";
$key = "";
$notifs = array();
$errors = array();

array_push($notifs, "{$key}");
array_push($notifs, "{$endpoint}");

if (isset($_POST['submitAPI'])) {
    $endpoint = $_POST['endpoint'];
    $file = $_FILES["image"]['image'];
    $key = $_POST['key'];

    header('location: index.php?status=success');

    array_push($errors, "Hi2");
}
