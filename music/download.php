<h3>Song downloaded</h3>
<?php

    $filename = basename($_GET['file']);
    $dir='audios/'.$filename;

      header('Content-Description: File Transfer');
      header('Content-Type: application/mp3');
      header('Content-Disposition: attachment; filename='.$filename);
      header('Content-Transfer-Encoding: binary');
      header('Cache-Control: public');
      readfile($filepath);
      exit;


?>
