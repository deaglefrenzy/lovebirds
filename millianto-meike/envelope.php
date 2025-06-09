    <?php
    $to = @$_GET['to'];
    if (!isset($to)) $to = "(Nama Tamu)";
    $guest = @$_GET['guest'];
    if (!isset($guest)) $guest = "1";
    $meja = @$_GET['meja'];
    if (!isset($meja)) $meja = "(Meja)";
    $data = @$_GET['qr'];

    $PNG_TEMP_DIR = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'temp' . DIRECTORY_SEPARATOR;
    $PNG_WEB_DIR = 'temp/';

    include "phpqrcode/qrlib.php";
    if (!file_exists($PNG_TEMP_DIR))
        mkdir($PNG_TEMP_DIR);
    $filename = $PNG_TEMP_DIR . 'test.png';

    $errorCorrectionLevel = 'L';
    $matrixPointSize = 4;

    ?>

    <div class="w3-center" style="width: 100%;" id="home">
        <div style="height: 20px;"></div>
        <div data-aos="flip-left"
            data-aos-easing="ease-out-cubic"
            data-aos-duration="2000">
            <img src="material/Millianto Web material-23.png" width="350px">
        </div>
        <div style="height: 250px;"></div>
        <div align="center" data-aos="fade">
            <p class="w3-medium" style="font-family:'bodoni'; letter-spacing:1px; line-height:15px; font-weight:bold;">
                <!--Invitation To-->
                Kepada Yth:

                Bapak / Ibu / Saudara(i)
                <!--Mr/Mrs/Miss-->
                <br><br>
                <font class="w3-xlarge" style="font-family:'minion'; letter-spacing:1px; line-height:20px;">
                    <?php echo $to; ?>
                </font>
            <table class="w3-large" style="font-family:'minion'; letter-spacing:2px; border-spacing:1px;">
                <tr>
                    <td>Meja</td>
                    <td align="center">:</td>
                    <td><?php echo $meja; ?></td>
                </tr>
                <tr>
                    <td>Tamu</td>
                    <td align="center">:</td>
                    <td><?php echo $guest; ?> orang</td>
                </tr>
            </table>
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
        <!-- <p class="w3-tiny" style="font-family:'minioni'; line-height:15px; letter-spacing:1px;">
            We invite You to attend our wedding.<br>
            Please screenshot this page and show it when You register.
        </p> -->
        <button id="open-invitation"><img src="material/Millianto Web material-24.png" style="width: 300px;"></button>
        <div style="height: 50px;"></div>
        <!-- <form id="invitationForm" action="invitation.php" method="get">
            <input type="hidden" name="to" value="<?php echo $to; ?>">
            <input type="hidden" name="gu" value="<?php echo $guest; ?>">
            <img src="material/Millianto Web material-24.png" style="width: 300px; cursor: pointer;" onclick="document.getElementById('invitationForm').submit();">
        </form> -->
        <!-- <a href="invitation.php"><img src="material/Anra Website-41.png" style="width:70%;" /></a>-->
        <br>
    </div>
