
<?php
include "./views/header.php";
?>
<h2>Explore the World and Meet New People!</h2>
    <?php include "./views/navigation.php"; ?>

<form action="index.php" method="get">
    <table>
        <?php foreach (get_guest_tweets() as $tweets) : ?>
            <tr>
                <td><?php echo $tweets['name']; ?> </td>
                <td><?php echo $tweets['tweet']; ?></td>
            </tr>
        <?php endforeach; ?>

    </table>
</form>
    <?php include 'footer.php'; ?>