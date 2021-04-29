<h2>Explore the World and see the Latest</h2>
<h3>Want to create your own account? Click link below!!</h3>
<a href="newUsers.php">Click here</a>

<!--Not sure if copied correctly below-->
 <table>
        <?php foreach (get_guest_tweets() as $tweets) : ?>
     
   <td><?php echo $tweets['tweet']; ?></td>
            </tr>
        <?php endforeach; ?>
  </table>