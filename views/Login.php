 <?php 
 require('./models/database.php');
require('./models/twitter_database.php');

 include "./views/header.php"; ?>

<h1>WelCome to Twitter Clone</h1>
<h2>Guest User - List of all tweets</h2>

    <table>
<?php foreach (get_guest_tweets() as $tweets) : ?>
                <tr>
                    <td><?php echo $tweets['name']; ?> </td>
                    <td><?php echo $tweets['tweet']; ?></td>
                    
                </tr>
<?php endforeach; ?>

        </table>
<h2>Login</h2>
<form action="login.php" method="post">
    <div id="data">
        <label>User Name</label>
        <input type="text" name="username"><br><br>
        <label>Password</label>
        <input type="password" name="password"><br><br>
        <input type="hidden" name="action" value="submitLogin"/>
    </div>
    <div id="buttons">          
        <label>&nbsp;</label>
        <input type="submit" value="Login"><br><br>
        <input type="submit" value="Change Password "><br><br>
        <input type="submit" value="Create New User"><br><br>

    </div>
</form>



 <?php include './views/footer.php'; ?>