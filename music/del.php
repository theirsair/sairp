<h3>Song removed</h3>
<?php
		$name = $_GET['name'];
    require("config.php");
    $odp = mysqli_query($conn, "delete from music where m_name='$name'");
		unlink($name);

?>
