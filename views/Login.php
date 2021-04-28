 <?php 
 require('./models/database.php');
require('./models/twitter_database.php');

 include "./views/header.php"; ?>

<h1>Welcome to Twitter Clone</h1>
<h2>Hello<h2/>

<h2>Login</h2>
<form action="login.php" method="post">
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
<a href="views/guest.php">Login as Guest Here<a/>

    </div>
</form>



 <?php include './views/footer.php'; ?>