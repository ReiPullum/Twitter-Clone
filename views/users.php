<?php include "./views/header.php"; ?>
    <body>
        <?php include "./views/navigation.php"; ?>
        
        <h1>User's Page</h1>
        <h3>List of tweets with no of likes</h3>
        <h3>Follow & Unfollow People</h3>
        <table>
            <th>Name</th>
            
                    
            <?php foreach ($users as $user) : ?>
                <tr>
                    <td><?php echo $user['name']; ?> </td>
                    
                </tr>
            <?php endforeach; ?>
        </table>
        <?php include './views/footer.php'; ?>