<?php
/**
 * Created by PhpStorm.
 * User: steve
 * Date: 12/8/16
 * Time: 7:09 PM
 * Time: 7:09 PM
 */

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['firstname'])) {
        $displayErr = "First Name is required.";
    } else {
        $firstname = $_POST['firstname'];
    }

    if (empty($_POST['$lastname'])) {
        $displayErr = "Last Name is required.";
    } else {
        $lastname = $_POST['$lastname'];
    }

    if (empty($_POST['username'])) {
        $displayErr = "Username is required.";
    } else {
        $username = $_POST['username'];
    }

    if (empty($_POST['$password'])) {
        $displayErr = "Password is required.";
    } else {
        $password = $_POST['$password'];
    }

    if (empty($_POST['$password2'])) {
        $displayErr = "You must confirm your password.";
    } else {
        $password2 = $_POST['password2'];
    }

    if (empty($_POST['email'])) {
        $displayErr = "Email address is required.";
    } else {
        $email = $_POST['email'];
    }

    if ($password == $confirm) {
        $passhash = password_hash($password, PASSWORD_DEFAULT);
        if ($passhash != false) {
            $displayErr = $passhash;
        } else {
            $displayErr = "Password hash has failed";
        }
    } else {
        $displayErr = "Passwords do not match";
    }

}

//    include('db_connect.php');



//$sth = $dbh->prepare('SELECT * FROM users WHERE UR_USER_NAME = :username OR UR_EMAIL = :email');
//$sth->bindParam(':username', $username, PDO::PARAM_STR);
//$sth->bindParam(':email', $email, PDO::PARAM_STR);

//$sth->execute();

//echo $sth->rowCount() . "<br>" ;

//fetch - returns a single dimensional array for the next/first row in the result set


//fetch all -
// returns a multidimensional array where the first array element is the result row and the second is the result column
//$result = $sth->fetchAll(PDO::FETCH_ASSOC);
//echo $result[0]['UR_USER_NAME'] ;


?>


<!DOCTYPE html>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title></title>
</head>

<body>
<div class="container">
    <div class="nav-top">
        <ul class="nav_menu" id="nav_menu">
            <li class="mobilemenu"> <a href="javascript:void(0);" onclick="myFunction()">$</a> </li>
            <li>Home</li>
            <li>Budget
                <ul class="dropdown">
                    <li>One</li>
                    <li>Two</li>
                    <li>Three</li>
                    <li>Four</li>
                </ul>
            </li>

            <li>Categories
                <ul class="dropdown">
                    <li>One</li>
                    <li><a href=#>Two</a></li>
                    <li>Three</li>
                    <li>Four</li>
                </ul>
            </li>
            <li>Transactions
                <ul class="dropdown">
                    <li>One</li>
                    <li>Two</li>
                    <li>Three</li>
                    <li>Four</li>
                </ul>
            </li>
            <li>Reports
                <ul class="dropdown">
                    <li>One</li>
                    <li>Two</li>
                    <li>Three</li>
                    <li>Four</li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="content">
        <div class="content-box">
            <div><?php echo $displayErr ?></div>

            <form method="post" action="register.php">
                <table>
                    <th>New User Registration</th>
                    <tr>
                        <td>First Name:</td>
                        <td>Last Name:</td>
                    </tr>
                    <tr>
                        <td><input type="text" name="firstname"></td>
                        <td><input type="text" name="lastname"></td>
                    </tr>
                    <tr>
                        <td>Username:</td>
                        <td>Email:</td>
                    </tr>
                    <tr>
                        <td><input type="text" name="username"></td>
                        <td><input type="email" name="email"></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td>Confirm Password:</td>
                    </tr>
                    <tr>
                        <td><input type="password" name="password"></td>
                        <td><input type="password" name="password2"></td>
                    </tr>
                </table>
                <br>
                <input type="submit" value="Register">
                </form>
        </div>
        <div class="nav-bottom">
        </div>
    </div>

    <script>
        function myFunction() {
            var i = document.getElementById("nav_menu");
            if (i.className === "nav_menu") {
                i.className += " responsive";
            } else {
                i.className = "nav_menu";
            }
        }
    </script>
</body>

</html>