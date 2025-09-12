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

if (!$useEnglish) {
    $kepadayth = "Kepada Yth: <br> Bapak / Ibu / Saudara(i)";
    $tab = "Meja";
    $tam = "Tamu";
} else {
    $kepadayth = "Invitation To: <br> Mr/Mrs/Ms/Mr & Mrs";
    $tab = "Table";
    $tam = "Guest(s)";
}
?>
<div class="w3-center fo2 bg1 minioni" style="
    width: 100%;
    background-image: url('material/envelope.png');
    background-size: 100%;
    background-repeat: no-repeat;" id="home">
    <div style="height: 60px;"></div>
    <img src="material/logo4.png" width="60%">
    <!-- <div data-aos="flip-left"
            data-aos-easing="ease-out-cubic"
            data-aos-duration="2000">
            <br>
            <img src="material/mainlogo.jpg" width="350px">
        <div style="font-family:aston; line-height:50px;" class="w3-xxlarge">
            <font style="margin-right:30px;">Yehezkiel</font>
            <br>
            <font style="margin-left:30px;">
                <font class="w3-xlarge">&</font> Melinda
            </font>
        </div>
    </div>
        -->
    <div style="height: 60px;"></div>
    <div align="center" data-aos="fade">
        <p style="letter-spacing:1px; line-height:15px;">
            <?= $kepadayth ?>
            <br><br>
            <font class="w3-xlarge minion" style="letter-spacing:1px; line-height:20px;">
                <?= $to ?>
            </font>
        <div style="height: 10px;"></div>
        </p>
    </div>
    <div style="height: 140px;"></div>
    <button id="open-invitation"><img src="material/openinvitation.png" style="width: 300px;"></button>
    <div style="height: 20px;"></div>
    <!-- <form id="invitationForm" action="invitation.php" method="get">
            <input type="hidden" name="to" value="<?php echo $to; ?>">
            <input type="hidden" name="gu" value="<?php echo $guest; ?>">
            <img src="material/Millianto Web material-24.png" style="width: 300px; cursor: pointer;" onclick="document.getElementById('invitationForm').submit();">
        </form> -->
    <!-- <a href="invitation.php"><img src="material/Anra Website-41.png" style="width:70%;" /></a>-->
    <br>
</div>
