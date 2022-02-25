<h3>Song edited succesfully</h3>
<?php

$xname = $_POST['xname'];
$nr = $_POST['nr'];
$oldname = $_POST['oldname'];

$dir = 'audios/';
$filetype = '.mp3';
$audiofile = $dir.$xname.$filetype;


require('config.php');
$odp = mysqli_query($conn, "update music set m_name='$audiofile' where lp='$nr'");

rename($oldname, $audiofile);


?>
