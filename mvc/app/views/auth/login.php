<?php require_once '../app/views/layouts/login.header.partial.php'; ?>


<form method="post" action="<?=$urlBase . 'auth/validate' ?>">
    <table>
        <tr>
            <td>Username:</td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Login"></td>
        </tr>
        <tr>
            <td colspan="2"><?php echo $data['error'] ?></td>
        </tr>
    </table>
</form>


<?php require_once '../app/views/layouts/footer.partial.php'; ?>


