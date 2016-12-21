<?php
/**
 * Created by PhpStorm.
 * User: steve
 * Date: 12/8/16
 * Time: 7:27 PM
 *
 */

$dbh = new PDO('mysql:host=localhost;dbname=budgetapp_db', 'root', 'password');
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
