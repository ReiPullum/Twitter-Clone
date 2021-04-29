
<?php
include "./views/header.php";
?>
<h2>Welcome to Twitter-Clone!!</h2>
<h3>Login below or sign in as a guest to continue</h3>
   


    <table>
        <?php foreach (get_guest_tweets() as $tweets) : ?>
            <tr>
                <td><?php echo $tweets['name']; ?> </td>
                <td><?php echo $tweets['tweet']; ?></td>
            </tr>
        <?php endforeach; ?>

    </table>
    <h2>Login</h2>
<form action="index.php" method="post">
    <div id="data">
        <label>User Name</label>
        <input type="text" name="username"><br><br>
        <label>Password</label>
        <input type="password" name="password"><br><br>

    </div>
    <div id="buttons">          
        <label>&nbsp;</label>
        <input type="submit" value="Sign in"><br><br><br>
        <input type="hidden" name="action" value="login"/>
        <input type="submit" value="Change Password "><br><br>
        <input type="hidden" name="action" value="changePass"/>
        <input type="submit" value="Create New User"><br><br>   
        <input type="hidden" name="action" value="newUser"/>
        <a href="views/guest.php">Login as Guest</a><br><br>
        <a href="views/changePassword.php">Change Password</a><br><br>
        <a href="views/users.php">User sample Test</a><br><br>
        <a href="views/newUser.php">New User sample Test</a><br><br>

    </div>
</form>

    <?php include 'footer.php'; ?>