<h3>Main Page</h3>
Songs in DB:
<?php

require("config.php");

$wynik = mysqli_query($conn, "select * from music");
$count = mysqli_num_rows($wynik);
echo '<strong>' . $count . '</strong>';


?>
