<h3>Music Browser</h3>
<table border="0" cellspacing="3">

    <tr>

    </tr>

    <?php
        require("config.php");
        $odp = mysqli_query($conn, "select * from music order by lp;");

        $i = 1;

        while ($wiersz = mysqli_fetch_array($odp))
        {
            $audioname= substr($wiersz['m_name'], strpos($wiersz['m_name'], "/") + 1);

            echo '<tr>';
            echo '<td>'.$audioname. '</td>';
            echo '<td>'.'<a href="index.php?file=play&name='.$wiersz['m_name'].'">[play]</a>'.'</td>';
            echo '<td>'.'<a href="index.php?file=edit&name='.$wiersz['m_name'].'&nr='.$wiersz['lp'].'">[edit]</a>'.'</td>';
            echo '<td>'.'<a href="browse.php?file='.$wiersz['m_name'].'">[download]</a>'.'</td>';
            echo '<td>'.'<a href="index.php?file=del&name='.$wiersz['m_name'].'">[delete]</a>'.'</td>';
            echo '</tr>';

            if($_GET['file'] == $wiersz['m_name']) {
              $filename = $_GET['file'];
              $audioname= substr($filename, strpos($filename, "/") + 1);

              header('Content-Description: File Transfer');
              header('Content-Type: application/mp3');
              header('Content-Disposition: attachment; filename='.$audioname);
              header('Content-Transfer-Encoding: binary');
              header('Cache-Control: public');
              readfile($filename);
              exit;
            }


        }


    ?>





</table>
