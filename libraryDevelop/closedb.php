<?php
// an example of closedb.php
// it does nothing but closing
// a mysql database connection

include 'config.php';
include 'opendb.php';

// ... do something like insert or select, etc

//include 'closedb.php';

mysql_close($conn);
?>

Now that you have put the database configuration, opening and closing routines in separate files your PHP script that uses mysql would look something like this :

