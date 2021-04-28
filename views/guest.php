
<?php 
require'./models/database.php';
require'./models/twitter_database.php';
include "./views/header.php";
?>



    <h1>Explore the World and Meet New People!<h1/>
    <h2>Want to join Twitter Clone? Click the link below<h2/>
    <a href="index.php">Click Here<a/>

    <table>
<?php foreach (get_guest_tweets() as $tweets) : ?>
                <tr>
                    <td><?php echo $tweets['name']; ?> </td>
                    <td><?php echo $tweets['tweet']; ?></td>
                    
                </tr>
<?php endforeach; ?>

        </table>

<?php include 'footer.php';?>