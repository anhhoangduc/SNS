<?php session_start(); ?>
<?php include "db.php"; ?>
<?php include "function.php"; ?>
<?php include "classes/Comment.php"; ?>
<?php include "classes/Message.php"; ?>
<?php $comment_obj = new Comment($connection); ?>
<?php $message_obj = new Message($connection); ?>
<!doctype html>
<html lang="en">
<head>
    <title>NetFriend</title>
    <link rel="shortcut icon" href="./logo.png">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700|Inconsolata:400,700" rel="stylesheet">


    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <!--     Theme Style -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
