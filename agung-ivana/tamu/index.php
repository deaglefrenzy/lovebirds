<?php include("../colors.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <title>GENERATE LINK TAMU</title>
    <link rel="apple-touch-icon" sizes="180x180" href="../../.favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../.favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../.favicon/favicon-16x16.png">
    <link rel="manifest" href="../../.favicon/site.webmanifest">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="../../.scripts/fonts.css" />
    <link rel="stylesheet" href="../../.scripts/styles.css" />
    <?php include("../../.scripts/styles.php"); ?>
</head>

<body class="bg3">
    <br>
    <?php
    include('../../.scripts/function.php');
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

    include "../../.phpqrcode/qrlib.php";
    if (!file_exists($PNG_TEMP_DIR))
        mkdir($PNG_TEMP_DIR);
    $filename = $PNG_TEMP_DIR . 'test.png';
    //echo $filename;

    $errorCorrectionLevel = 'L';
    $matrixPointSize = 10;
    ?>
    <div class="w3-container w3-center">
        <form action="index.php" method="post">
            <table align="center" width="50%">
                <tr>
                    <td align="left">
                        <font style="font-family:trajan;" class="fo2">NAMA TAMU</font>
                    </td>
                </tr>
                <tr>
                    <td><input class="w3-large fontpeach3" name="nama" type="text" style="border:0; border-radius:5px; width:100%;"></td>
                </tr>
                <tr>
                    <td style="height:10px"></td>
                </tr>
                <tr>
                    <td align="left">
                        <font style="font-family:trajan;" class="fo2">JUMLAH GUEST</font>
                    </td>
                </tr>
                <tr>
                    <td>
                        <select class="w3-large" name="guest" style="border:0; border-radius:5px; width:100%;">
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
                        <font style="font-family:Trajan;" class="fo2">NAMA MEJA</font>
                    </td>
                </tr>
                <tr>
                    <td><input class="w3-large" name="meja" type="text" style="border:0; border-radius:5px; width:100%;"></td>
                </tr>
                <tr>
                    <td style="height:10px"></td>
                </tr>
                <tr>
                    <td align="left">
                        <font style="font-family:Trajan;" class="fo2">KODE NOMOR QR</font>
                    </td>
                </tr>
                <tr>
                    <td><input class="w3-large" name="data" type="text" style="border:0; border-radius:5px; width:100%;"></td>
                </tr>
                <tr>
                    <td style="height:10px"></td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" class="w3-large" style="border:0; border-radius:5px; width:100%;">GENERATE LINK</button>
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
                        <font class="fo2">LINK UNDANGAN</font>
                    </td>
                </tr>
                <tr>
                    <td>
                        <textarea onclick="this.select();" class="w3-large fo3" style="border:0; border-radius:5px;" cols="25" rows="4"><?php echo $linknya; ?></textarea>
                    </td>
                </tr>
                <tr>
                    <td class="fo2 w3-large">
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
