<?php
include "./views/header.php";
?>
 <?php include "./views/navigation.php"; ?>
<h2>Welcome to Twitter-Clone!!</h2>
<h3>Login Below to Continue</h3>

<table>
    <?php foreach (get_guest_tweets() as $tweets) : ?>

        <tr>
            <td><?php echo $tweets['name']; ?> </td>
            <td><?php echo $tweets['tweet']; ?></td>
            <td><?php echo $tweets['likes']; ?></td>
        </tr>
    <?php endforeach; ?>

</table>

<h2>Login</h2><!-- comment -->

<form action="index.php" method="post">
    <div id="data">
        <label>User Name</label>
        <input type="text" name="username"><br>
        <label>Password</label>
        <input type="password" name="password"><br>
        <input type="hidden" name="action" value="submitLogin"/>
    </div>
    <div id="buttons">
        <label>&nbsp;</label>
        <input type="submit" value="Login"><br>
    </div>
</form>
<h2>Add User</h2>
<form action="user.php" method="post">
    <div id="data">
        <label>User Name</label>
        <input type="text" name="user_name"><br>
        <label>Password</label>
        <input type="password" name="password"><br>
        <input type="hidden" name="action" value="add_user" />
    </div>
    <div id="buttons">
        <label>&nbsp;</label>
        <input type="submit" value="Add User"><br>
    </div>
</form>
<h2>Change Password</h2>
<form action="user.php" method="post">
    <div id="data">
        <label>User Name</label>
        <input type="text" name="user_name"><br>
        <label>Password</label>
        <input type="password" name="password"><br>
        <input type="hidden" name="action" value="change_password"/>
    </div>
    <div id="buttons">
        <label>&nbsp;</label>
        <input type="submit" value="change password"><br>
    </div>
</form>
<p>
    <a href="index.php?action=new">New User</a> |
    <a href="index.php?action=change">Change Password</a>
</p>



<?php include 'footer.php'; ?>