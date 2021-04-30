<?php
include "./views/header.php";
?>
<h2>Enter Your Desired Username/Password for your new Account</h2>

<h2>Add User</h2>
        <form action="users.php" method="post">
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
<?php include 'footer.php'; ?>