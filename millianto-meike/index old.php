<?php
$judul = "Millianto & Meike's Wedding";
$folder = "millianto-meike";
$warna1 = "#F7F0E6";
$warna2 = "#FFFCF5";
$warna3 = "#191919";
$warna4 = "#CCA626";
$warna5 = "#633A11";
?>
<!DOCTYPE html>
<html>
<title><?php echo $judul; ?></title>

<head>
    <meta property="og:title" content="<?php echo $judul; ?>" />
    <meta property="og:description" content="You are Invited!" />
    <meta property="og:url" content="https://lovebirdsgallery.com/<?php echo $folder; ?>/" />
    <meta property="og:image" itemprop="image" content="https://lovebirdsgallery.com/<?php echo $folder; ?>/material/thumbnail.jpg" />
    <meta property="og:type" content="website" />
    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative&display=swap" rel="stylesheet">
    <style>
        body,
        h1,
        h2 {
            font-family: bodoni;
            color: <?php echo $warna3; ?>
        }

        body,
        html {
            height: 100%
        }

        .bgimg {
            background-image: url("material/Millianto Web material-11.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            min-height: 100%;
            background-position: center;
            width: 100%;
        }

        button {
            padding: 0em;
            cursor: pointer;
        }

        button:hover {
            cursor: hand;
        }

        .fo1 {
            color: <?php echo $warna1; ?>
        }

        .bg1 {
            background: <?php echo $warna1; ?>;
        }

        .fo2 {
            color: <?php echo $warna2; ?>
        }

        .bg2 {
            background: <?php echo $warna2; ?>;
        }

        .fo3 {
            color: <?php echo $warna3; ?>
        }

        .bg3 {
            background: <?php echo $warna3; ?>;
        }

        .fo4 {
            color: <?php echo $warna4; ?>
        }

        .bg4 {
            background: <?php echo $warna4; ?>;
        }

        .fo5 {
            color: <?php echo $warna5; ?>
        }

        .bg5 {
            background: <?php echo $warna5; ?>;
        }
    </style>
</head>

<body class="bg1">
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

    <header class="w3-display-container w3-wide bgimg w3-center" id="home">
        <div style="height: 80px;"></div>
        <div data-aos="flip-left"
            data-aos-easing="ease-out-cubic"
            data-aos-duration="2000">
            <img src="material/Millianto Web material-23.png" width="350px">
        </div>
        <div style="height: 220px;"></div>
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
        <form id="invitationForm" action="invitation.php" method="get">
            <input type="hidden" name="to" value="<?php echo $to; ?>">
            <input type="hidden" name="gu" value="<?php echo $guest; ?>">
            <img src="material/Millianto Web material-24.png" style="width: 300px; cursor: pointer;" onclick="document.getElementById('invitationForm').submit();">
        </form>
        <!-- <a href="invitation.php"><img src="material/Anra Website-41.png" style="width:70%;" /></a>-->
        <br>
    </header>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 2000,
            once: true
        });
    </script>
</body>

</html>
