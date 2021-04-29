<?php
include "./views/header.php";
?>



<h2>Explore the World and see the Latest</h2>
<h3>Follow others to stay posted</h3>
<table>
    <th>Name</th>


    <?php foreach (get_user() as $user) : ?>
        <tr>
            <td><?php echo $user['name']; ?> </td>

        </tr>
    <?php endforeach; ?>
</table>
<?php include 'footer.php'; ?>