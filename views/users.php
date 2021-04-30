<?php
include "./views/header.php";
?>
<h2>Explore the World and see the Latest</h2>
<h3>Follow others to stay posted</h3>
<table>
    <th>Name</th>

    
    <?php foreach (get_user_tweets() as $tweets) : ?>
        <tr>
            <td><?php echo $tweets['name']; ?> </td>
            <td><?php echo $tweets['tweet']; ?> </td>
            <td><?php echo $tweets['likes']; ?> </td>
            <td><?php echo $tweets['timestamp']; ?> </td>
            <td> <label>Follow</label>
            <input type="radio" value="follow" name="followRadio">
            <label>Unfollow</label>
            <input type="radio" value="unfollow" name="followRadio"></td>

        </tr>
    <?php endforeach; ?>
        
</table>
<h2>Add Tweet</h2>
    <form action="index.php" method="post">
        <div id="data">
            <label>Create Tweet</label>
           <input type="text" name="create_tweet"><br>
            <input type="hidden" name="action" value="add_tweet" />

        </div>
        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Add Tweet"><br>
        </div>
    </form>
<table>
    <th>Name</th>

    
    <?php foreach (get_user_tweets() as $tweets) : ?>
        <tr>
            <td><?php echo $tweets['name']; ?> </td>
            <td><?php echo $tweets['tweet']; ?> </td>
            <td><?php echo $tweets['likes']; ?> </td>
            <td><?php echo $tweets['timestamp']; ?> </td>
            <td> <label>Follow</label>
            <input type="radio" value="follow" name="followRadio">
            <label>Unfollow</label>
            <input type="radio" value="unfollow" name="followRadio"></td>

        </tr>
    <?php endforeach; ?>
        
</table>
<?php include 'footer.php'; ?>