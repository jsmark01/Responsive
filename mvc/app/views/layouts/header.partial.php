<?php

/**
 * Created by PhpStorm.
 * User: steve
 * Date: 12/19/16
 * Time: 2:12 PM
 */

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
        <li><a href="<?=$urlBase . 'budgets/index' ?>">Budgets</a>
            <ul class="dropdown">
                <li>One</li>
                <li>Two</li>
                <li>Three</li>
                <li>Four</li>
            </ul>
        </li>

        <li><a href="<?=$urlBase . 'categories/index' ?>">Categories</a>
            <ul class="dropdown">
                <li>One</li>
                <li><a href=#>Two</a></li>
                <li>Three</li>
                <li>Four</li>
            </ul>
        </li>
        <li><a href="<?=$urlBase . 'transactions/index' ?>">Transactions</a>
            <ul class="dropdown">
                <li>One</li>
                <li>Two</li>
                <li>Three</li>
                <li>Four</li>
            </ul>
        </li>
        <li><a href="<?=$urlBase . 'reports/index' ?>">Reports</a>
            <ul class="dropdown">
                <li>One</li>
                <li>Two</li>
                <li>Three</li>
                <li>Four</li>
            </ul>
        </li>
    </ul>
    <ul class="profile_menu">
        <li><a href="<?=$urlBase . 'auth/logout' ?>">Log Out</a></li>
        <li><?php echo $_SESSION["username"] ; ?>
            <div class="profile">
                Username: <br> <?php echo $_SESSION["username"] ; ?>


            </div>
        </li>
    </ul>
</div>

<div class="content-body">
    <div class="title-box">
        <?= $view; ?>
    </div>
    <div class="content-box">
