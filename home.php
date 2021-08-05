<?php 
include_once 'partials/navbar.php';
?>


<?php
// GET and POST
// GET should NEVER be used for sending passwords or other sensitive information!

if(isset($_POST['send'])) {
    echo("Hello " .$_POST['fn'] .$_POST['sn']);
}

echo '<br>';
echo '<br>';
echo '<br>';
?>


<?php
include_once 'partials/footer.php';
?>