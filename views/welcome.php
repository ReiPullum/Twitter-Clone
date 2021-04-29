<?php
include "./views/header.php";
?>
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

<h2>Login</h2>
<form action="index.php" method="post">
    <div id="data">
        <label>User Name</label>
        <input type="text" name="username"><br>
        <label>Password</label>
        <input type="text" name="password"><br>
        <input type="hidden" name="action" value="login"/>
    </div>


<div id="buttons">          
    <label>&nbsp;</label>
    <input type="submit" value="Sign in"><br><br><br>
    <input type="hidden" name="action" value="login"/>
    <input type="submit" value="Change Password "><br><br>
    <input type="hidden" name="action" value="change_password"/>
    <input type="submit" value="Create New User"><br><br>   
    <input type="hidden" name="action" value="add_user"/>

</div>
    <!--Page View Samples Below, change into submit buttons-->
    <a href="views/changePassword.php">Change Password view sample test</a><br><br>
    <a href="views/users.php">User view sample Test</a><br><br>
    <a href="views/newUsers.php">New User view sample Test</a><br><br>


    </form>

    <?php include 'footer.php'; ?>