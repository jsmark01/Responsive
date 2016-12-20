<?php
/**
 * Created by PhpStorm.
 * User: steve
 * Date: 12/20/16
 * Time: 9:23 AM
 */

?>
<?=$data['error']; ?>

<form method="post" action="../auth/validate">
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
            <td colspan="2"><input type="submit" value="Login"></td>
        </tr>
    </table>
</form>
