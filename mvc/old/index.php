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
            <table>
                <tr>
                    <td>Login:</td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Login"></td>
                </tr>
            </table>
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