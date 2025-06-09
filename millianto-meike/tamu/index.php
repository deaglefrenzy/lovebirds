<?php
$folder = "millianto-meike";
?>
<!DOCTYPE html>
<html>
<title>GENERATE LINK TAMU</title>

<head>
    <link rel="apple-touch-icon" sizes="57x57" href="../favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="../favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
    <link rel="manifest" href="../favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <style>
        @font-face {
            font-family: Cinzel;
            src: url('../fonts/Cinzel-Regular_1.otf');
        }

        @font-face {
            font-family: CinzelBold;
            src: url('../fonts/Cinzel-Bold_1.otf');
        }

        @font-face {
            font-family: Foglihten;
            src: url('../fonts/FoglihtenPCS-068_1.otf');
        }

        @font-face {
            font-family: Futura;
            src: url('../fonts/Futura Book font_0.ttf');
        }

        @font-face {
            font-family: Trajan;
            src: url('../fonts/TrajanPro-Regular.otf');
        }

        @font-face {
            font-family: TrajanBold;
            src: url('../fonts/TrajanPro-Bold.otf');
        }

        @font-face {
            font-family: Devanagari;
            src: url('../fonts/AdobeDevanagari-Regular.otf');
        }

        @font-face {
            font-family: Aisyah;
            src: url('../fonts/Aisyah-Demo.otf');
        }

        @font-face {
            font-family: GillSans;
            src: url('../fonts/Gill Sans Light_1.otf');
        }

        @font-face {
            font-family: Bodoni;
            src: url('../fonts/tt0035m_.ttf');
        }

        @font-face {
            font-family: Florilane;
            src: url('../fonts/Florilane Cardillac.ttf');
        }

        @font-face {
            font-family: Trebuchetbi;
            src: url('../fonts/trebucbi.ttf');
        }

        @font-face {
            font-family: Trebuchetit;
            src: url('../fonts/trebucit.ttf');
        }

        @font-face {
            font-family: Trebuchet;
            src: url('../fonts/trebuc.ttf');
        }

        @font-face {
            font-family: Trebuchetbd;
            src: url('../fonts/trebucbd.ttf');
        }

        @font-face {
            font-family: Stardust;
            src: url('../fonts/STARDUST ADVENTURE_0.TTF');
        }

        body,
        h1,
        h2 {
            font-family: "Bebas Neue", sans-serif
        }

        body,
        html {
            height: 100%
        }

        p {
            line-height: 2
        }

        .bgimg,
        .bgimg2 {
            min-height: 100%;
            background-position: center;
            background-size: cover;
        }

        button {
            padding: 0.5em 2em;
            border: 1px #633A11 solid;
            border-radius: 5px;
            background: #633A11;
            color: #FFFAF0;
            border-radius: 15px;
            cursor: pointer;
        }

        button:hover {
            background: #FFFAF0;
            border: 1px #633A11 solid;
            color: #633A11;
            cursor: hand;
        }

        .bgpeach {
            background: #FFC2C4;
        }

        .bgcream {
            background: #FFFAF0;
        }

        .bgpeach2 {
            background: #E68C78;
        }

        .bgpeach3 {
            background: #f9cab8;
        }

        .fontpeach {
            color: #E68C78;
        }

        .fontgold {
            color: #D19E26;
        }

        .fontabu {
            color: #191919;
        }

        .fontcoklat {
            color: #633A11;
        }

        .fontwhite {
            color: #ffffff;
        }
    </style>
</head>

<body style="background:#f9cab8;">
    <br>
    <?php
    include('../function.php');
    $nama = @$_POST['nama'];
    $guest = @$_POST['guest'];
    $meja = @$_POST['meja'];
    $data = @$_POST['data'];
    $data = trim($data);
    $nama = str_replace(" ", "+", $nama);
    if (!empty($nama)) $linknya = "https://lovebirdsgallery.com/$folder/?to=$nama&guest=$guest&meja=$meja&qr=$data";
    else $linknya = "";

    $PNG_TEMP_DIR = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'temp' . DIRECTORY_SEPARATOR;
    $PNG_WEB_DIR = 'temp/';

    include "../phpqrcode/qrlib.php";
    if (!file_exists($PNG_TEMP_DIR))
        mkdir($PNG_TEMP_DIR);
    $filename = $PNG_TEMP_DIR . 'test.png';

    $errorCorrectionLevel = 'L';
    $matrixPointSize = 10;
    ?>
    <div class="w3-container w3-center">
        <form action="index.php" method="post">
            <table align="center" width="50%">
                <tr>
                    <td align="left">
                        <font style="font-family:Trajan;" class="fontcoklat">NAMA TAMU</font>
                    </td>
                </tr>
                <tr>
                    <td><input class="w3-large fontpeach3" name="nama" type="text" style="font-family:GillSans; border:0; border-radius:5px; width:100%;"></td>
                </tr>
                <tr>
                    <td style="height:10px"></td>
                </tr>
                <tr>
                    <td align="left">
                        <font style="font-family:Trajan;" class="fontcoklat">JUMLAH GUEST</font>
                    </td>
                </tr>
                <tr>
                    <td>
                        <select class="w3-large fontcoklat" name="guest" style="font-family:GillSans; border:0; border-radius:5px; width:100%;">
                            <option value="1">1 Tamu</option>
                            <option value="2">2 Tamu</option>
                            <option value="3">3 Tamu</option>
                            <option value="4">4 Tamu</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td style="height:10px"></td>
                </tr>
                <tr>
                    <td align="left">
                        <font style="font-family:Trajan;" class="fontcoklat">NAMA MEJA</font>
                    </td>
                </tr>
                <tr>
                    <td><input class="w3-large fontpeach3" name="meja" type="text" style="font-family:GillSans; border:0; border-radius:5px; width:100%;"></td>
                </tr>
                <tr>
                    <td style="height:10px"></td>
                </tr>
                <tr>
                    <td align="left">
                        <font style="font-family:Trajan;" class="fontcoklat">KODE NOMOR QR</font>
                    </td>
                </tr>
                <tr>
                    <td><input class="w3-large fontpeach3" name="data" type="text" style="font-family:GillSans; border:0; border-radius:5px; width:100%;"></td>
                </tr>
                <tr>
                    <td style="height:10px"></td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" class="w3-large" style="font-family:GillSans; border:0; border-radius:5px; width:100%;">GENERATE LINK</button>
                    </td>
                </tr>
            </table>
        </form>
        <br /><br /><br />
        <?php
        if (!empty($nama)) {
        ?>
            <table align="center">
                <tr>
                    <td align="center">
                        <font style="font-family:GillSans;" class="fontcoklat">LINK UNDANGAN</font>
                    </td>
                </tr>
                <tr>
                    <td>
                        <textarea onclick="this.select();" class="w3-large fontcoklat" style="font-family:GillSans; border:0; border-radius:5px;" cols="25" rows="4"><?php echo $linknya; ?></textarea>
                    </td>
                </tr>
                <tr>
                    <td style="font-family:GillSans;" class="fontcoklat w3-large">
                        <?php
                        if (isset($data)) {
                            $filename = $PNG_TEMP_DIR . 'test' . md5($_REQUEST['data'] . '|' . $errorCorrectionLevel . '|' . $matrixPointSize) . '.png';
                            QRcode::png($data, $filename, $errorCorrectionLevel, $matrixPointSize, 2);
                            echo '<img src="' . $PNG_WEB_DIR . basename($filename) . '" />';
                            echo '<br>' . $data;
                        }
                        ?>
                    </td>
                </tr>
            </table>
        <?php } ?>
        <br><br>
    </div>
</body>
