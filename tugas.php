<!DOCTYPE HTML>
<html>
    <head></head>
    <body>
        <?php
        echo "<h2> Maret 2022</h2>";

            $hari	= date("d");
            $bulan	= date ("m");
            $tahun	= date("Y");
            $jmlhari=date("t",mktime(0,0,0,$bulan,$hari,$tahun));
            ?>
            <table style="border:2px solid #1E90FF">
              <tr bgcolor="#ADD8E6">
              <td align=center>Minggu</td>
              <td align=center>Senin</td>
              <td align=center>Selasa</td>
              <td align=center>Rabu</td>
              <td align=center>Kamis</td>
              <td align=center>Jumat</td>
              <td align=center>Sabtu</td>
              </tr>
              <?php
            $s=date ("w", mktime (0,0,0,$bulan,1,$tahun));
             
            for ($ds=1;$ds<=$s;$ds++) {
            echo "<td></td>";
            }
             
            for ($d=1;$d<=$jmlhari;$d++) {
             
                if (date("w",mktime (0,0,0,$bulan,$d,$tahun)) == 0) {
                    echo "<tr>"; 
                    }
                $warna="#000000";
             
            if (date("l",mktime (0,0,0,$bulan,$d,$tahun)) == "Sunday") {  }
            echo "<td align=center valign=middle> <span style=\"color:$warna\">$d</span></td>"; 
            if (date("w",mktime (0,0,0,$bulan,$d,$tahun)) == 6) { echo "</tr>"; }
            }
            echo '</table>'; 
        ?>
     </body>
</html>