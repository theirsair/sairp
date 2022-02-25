<h3>Music Player</h3>
<?php

  $xname = $_GET["name"];

  echo '<audio controls>';
  echo '<source src="'.$xname.'" type="audio/mpeg">';
  echo '</source>';
  echo '</audio>';

?>
