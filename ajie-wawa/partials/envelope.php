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

$efont = "minion";

if (!$useEnglish) {
    $kepadayth = "Kepada Yth:<br>Bapak / Ibu / Saudara(i)";
    $tab = "Meja";
    $tam = "Tamu";
} else {
    $kepadayth = "Mr/Mrs/Ms/Mr & Mrs";
    $tab = "Table";
    $tam = "Guest(s)";
}
?>
<div class="w3-center fo3" style="width: 100%;" id="home">
    <div style="height: 50px;"></div>
    <div data-aos="flip-left"
        data-aos-easing="ease-out-cubic"
        data-aos-duration="2000">
        <div class="w3-xlarge aston fo5">
            Ajie & Wawa
        </div>
    </div>
    <div align="center" data-aos="fade">
        <p style="letter-spacing:1px; line-height:15px;" class="w3-tiny minioni">
            <?= $kepadayth ?>
            <br><br>
            <font class="w3-xlarge" style="font-family:'<?php echo $efont; ?>'; letter-spacing:1px; line-height:20px;">
                <?= $to ?>
            </font>
            <!-- <table class="w3-large" style="font-family:'<?php echo $efont; ?>'; letter-spacing:2px; border-spacing:1px;">
            <tr>
                <td><?= $tab ?></td>
                <td align="center" style="padding-left:10px; padding-right:10px;">:</td>
                <td><?php echo $meja; ?></td>
            </tr>
            <tr>
                <td><?= $tam ?></td>
                <td align="center" style="padding-left:10px; padding-right:10px;">:</td>
                <td><?php echo $guest; ?></td>
            </tr>
        </table> -->
        <div style="height: 300px;"></div>
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
        <br>
        </p>
        <!-- <p style="font-family:minioni; line-height:15px;" class="w3-tiny">
            We warmly invite you to attend our wedding.
            <br>
            Please take a screenshot of this page and show it at the registration desk upon arrival.
        </p> -->
    </div>
    <div style="height: 50px;"></div>
    <button id="open-invitation"><img src="material/openinvitation.png" style="width: 300px;"></button>
    <div style="height: 100px;"></div>
    <!-- <form id="invitationForm" action="invitation.php" method="get">
            <input type="hidden" name="to" value="<?php echo $to; ?>">
            <input type="hidden" name="gu" value="<?php echo $guest; ?>">
            <img src="material/Millianto Web material-24.png" style="width: 300px; cursor: pointer;" onclick="document.getElementById('invitationForm').submit();">
        </form> -->
    <!-- <a href="invitation.php"><img src="material/Anra Website-41.png" style="width:70%;" /></a>-->
</div>
