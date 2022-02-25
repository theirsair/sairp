<h3>Song added succesfully</h3>
<?php

if(isset($_POST['audiosave']) && $_POST['audiosave']=="Upload")
{
			$dir='audios/';
			$audio_path=$dir.basename($_FILES['xname']['name']);

			require('config.php');
			$odp = mysqli_query($conn, "insert into music(m_name) values ('$audio_path')");

		 	if(move_uploaded_file($_FILES['xname']['tmp_name'],$audio_path))
			{
				$audioname= substr($audio_path, strpos($audio_path, "/") + 1);
				echo 'Added:  '.$audioname;

			}


}


?>
