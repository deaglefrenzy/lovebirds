<br>
    <?php
    $qu="SELECT * FROM ".$folder."1 ORDER BY tgl DESC,id DESC";
    $q=mysqli_query($conn,$qu);
        while($qq=mysqli_fetch_array($q)){
		$ucapan=str_replace("\n","<br>",$qq['ucapan']);
		?>
          <div class="w3-content w3-center">
            <table style="background:<?php echo $warna2; ?>; border-radius:10px; border:2px solid <?php echo $warna3; ?>" width="90%" align="center" cellpadding="5">
                <tr>
                  <td align="left" style="line-height:18px;">
                    <font class="w3-medium" style="font-family:tbc;">
                    	<i class="fa-solid fa-user-large"></i> <?php echo $qq['nama']; ?>&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-calendar-days"></i> <?php echo date("d M Y", strtotime($qq['tgl'])); ?>
                    </font>
                    <br/>
                    <font class="w3-small" style="font-family:tbc;"><?php echo $ucapan; ?></font>
                  </td>
                </tr>
            </table>
            <br>
        </div>
        <?php
        }
    ?>
<br />