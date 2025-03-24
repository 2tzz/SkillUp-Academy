
<?php
 $db = mysqli_connect('localhost:3306', 'root', '') or
        die ('Unable to connect. Check your connection parameters.');
        mysqli_select_db($db, 'paymentcheck' ) or die(mysqli_error($db));
?>