<h3>Edit file</h3>

<?php

$oldname=$_GET['name'];
$nr=$_GET['nr'];
$nodirfile= substr($oldname, strpos($oldname, "/") + 1);
$audioname= trim($nodirfile, '.mp3');

echo '<form method="post" action="index.php?file=action2">';
echo '<p>Music name: <input type="text" name="xname" maxlength="100" style="width:400px;" value="'.$audioname.'"></p>';
echo '<input type="hidden" name="nr" value="'.$nr.'">';
echo '<input type="hidden" name="oldname" value="'.$oldname.'">';
echo '<input type="submit" value="Edit">';
echo '</form>';

?>
