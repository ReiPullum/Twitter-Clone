<?php
include "./views/header.php";
?>
<h2>Please Enter your Username and new Password Below</h2>

<h2>Change Password</h2>
<form action="users.php" method="post">
    <div id="data">
        <label>User Name</label>
        <input type="text" name="username"><br>
        <label>Password</label>
        <input type="password" name="password"><br>
        <input type="hidden" name="action" value="change_password"/>
    </div>
    <div id="buttons">
        <label>&nbsp;</label>
        <input type="submit" value="change password"><br>
    </div>
</form>

<?php include 'footer.php'; ?>