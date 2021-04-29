
<?php
include "./views/header.php";
?>
<h2>Explore the World and Meet New People!</h2>
   


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
        <input type="submit" value="Login"><br><br>
        <input type="hidden" name="action" value="login"/>
        <input type="submit" value="Change Password "><br><br>
        <input type="hidden" name="action" value="changePass"/>
        <input type="submit" value="Create New User"><br><br>   
        <input type="hidden" name="action" value="newUser"/>


    </div>
</form>

    <?php include 'footer.php'; ?>