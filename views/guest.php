

<h2>Explore the World and see the Latest</h2>
<h3>Want to create your own account? Click link below!!</h3>
<a href="index.php">Click here</a>

    <table>
        <?php foreach (get_guest_tweets() as $tweets) : ?>
            <tr>
                <td><?php echo $tweets['name']; ?> </td>
                <td><?php echo $tweets['tweet']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>