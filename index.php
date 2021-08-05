<?php 
include_once 'partials/navbar.php';
?>

<form method="post" action="home.php">
<label for="fn">First Name:</label>
<input type="text" name="fn">

<label for="sn">Second Name:</label>
<input type="text" name="sn"><br>
<br>

<button type="submit" name="send">Enter</button>
<br>
<br>
<br>
</form>



<?php
include_once 'partials/footer.php';
?>