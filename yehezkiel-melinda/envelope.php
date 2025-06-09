    <?php
    $to = @$_GET['to'];
    if (!isset($to)) $to = "(Nama Tamu)";
    $guest = @$_GET['guest'];
    if (!isset($guest)) $guest = "2";
    $meja = @$_GET['meja'];
    if (!isset($meja)) $meja = "(Meja)";
    $data = @$_GET['qr'];

    $PNG_TEMP_DIR = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'temp' . DIRECTORY_SEPARATOR;
    $PNG_WEB_DIR = 'temp/';

    include "../.phpqrcode/qrlib.php";
    if (!file_exists($PNG_TEMP_DIR))
        mkdir($PNG_TEMP_DIR);
    $filename = $PNG_TEMP_DIR . 'test.png';

    $errorCorrectionLevel = 'L';
    $matrixPointSize = 4;

    ?>

    <div class="w3-center fo2" style="width: 100%;" id="home">
        <div style="height: 20px;"></div>
        <div data-aos="flip-left"
            data-aos-easing="ease-out-cubic"
            data-aos-duration="2000">
            <br>
            <!-- <img src="material/mainlogo.jpg" width="350px"> -->
            <div style="font-family:aston; line-height:50px;" class="w3-xxlarge">
                <font style="margin-right:30px;">Yehezkiel</font>
                <br>
                <font style="margin-left:30px;">
                    <font class="w3-xlarge">&</font> Melinda
                </font>
            </div>
        </div>
        <div style="height: 30px;"></div>
        <div align="center" data-aos="fade">
            <?php
            $efont = "bodoni";
            $english = false;
            ?>
            <p style="font-family:'<?php echo $efont; ?>'; letter-spacing:1px; line-height:15px;">
                <?php
                if (!$english) {
                    echo "Kepada Yth: Bapak / Ibu / Saudara(i)";
                } else {
                    echo "Invitation To:<br>Mr/Mrs/Ms/Mr & Mrs";
                }
                ?>
                <br><br>
                <font class="w3-xlarge" style="font-family:'<?php echo $efont; ?>'; letter-spacing:1px; line-height:20px;">
                    <?php echo $to; ?>
                </font>
            <table class="w3-large" style="font-family:'<?php echo $efont; ?>'; letter-spacing:2px; border-spacing:1px;">
                <tr>
                    <td>Meja</td>
                    <td align="center" style="padding-left:10px; padding-right:10px;">:</td>
                    <td><?php echo $meja; ?></td>
                </tr>
                <tr>
                    <td>Tamu</td>
                    <td align="center" style="padding-left:10px; padding-right:10px;">:</td>
                    <td><?php echo $guest; ?></td>
                </tr>
            </table>
            <div style="height: 200px;"></div>
            <?php
            if (isset($data)) {
            ?>
                <font class="w3-tiny" style="font-family:'tit'; letter-spacing:2px;">
                    <?php
                    $filename = $PNG_TEMP_DIR . 'test' . md5($_REQUEST['data'] . '|' . $errorCorrectionLevel . '|' . $matrixPointSize) . '.png';
                    QRcode::png($data, $filename, $errorCorrectionLevel, $matrixPointSize, 2);
                    echo '<img src="' . $PNG_WEB_DIR . basename($filename) . '" />';
                    ?>
                </font>
                <br>
                <?php echo $data; ?>
            <?php } ?>
            </p>
        </div>
        <br>
        <button id="open-invitation"><img src="material/openinvitation.png" style="width: 300px;"></button>
        <div style="height: 50px;"></div>
        <!-- <form id="invitationForm" action="invitation.php" method="get">
            <input type="hidden" name="to" value="<?php echo $to; ?>">
            <input type="hidden" name="gu" value="<?php echo $guest; ?>">
            <img src="material/Millianto Web material-24.png" style="width: 300px; cursor: pointer;" onclick="document.getElementById('invitationForm').submit();">
        </form> -->
        <!-- <a href="invitation.php"><img src="material/Anra Website-41.png" style="width:70%;" /></a>-->
        <br>
    </div>
