<?php

$urlBase = '/Responsive/mvc/public/';

?>


<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width", initial-scale="1.0">
<link rel="stylesheet" type="text/css" href="http://10.0.0.112/Responsive/mvc/public/css/style.css">


</head>

<body>

<div class="nav-top">
    <ul class="nav_menu" id="nav_menu">
        <li class="mobilemenu"> <a href="javascript:void(0);" onclick="myFunction()">$</a> </li>
        <li><a href="<?=$urlBase . 'home/home' ?>">Home</a></li>
    </ul>
    <ul class="profile_menu">
        <li><a href="<?=$urlBase . 'auth/login' ?>">Log In</a></li>
    </ul>
</div>

<div class="content-body">
    <div class="title-box">
        <?= $view; ?>
    </div>
    <div class="content-box">