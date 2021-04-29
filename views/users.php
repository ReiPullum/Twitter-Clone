<?php include "./views/header.php"; ?>
    <body>
        
        
        <h1>User's Page</h1>
        <h3>List of tweets with no of likes</h3>
        <h3>Follow & Unfollow People</h3>
        <table>
            <th>Name</th>
            
                    
            <?php foreach (get_user() as $users) : ?>
                <tr>
                    <td><?php echo $users['name']; ?> </td>
                    
                </tr>
            <?php endforeach; ?>
        </table>
        <?php include './views/footer.php'; ?>