<?php include "header.php"; ?>
    <body>
        
        
        <h2>Explore the World and see the Latest</h2>
        <h3>Follow others to stay posted</h3>
        <table>
            <th>Name</th>
            
                    
            <?php foreach ($users as $user) : ?>
                <tr>
                    <td><?php echo $user['name']; ?> </td>
                    
                </tr>
            <?php endforeach; ?>
        </table>
        <?php include 'footer.php'; ?>