<?php
$judul = "Millianto & Meike's Wedding";
$folder = "millianto-meike";
$folder2 = "milliantomeike";
$warna1 = "#F7F0E6";
$warna2 = "#FDFDFD";
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

    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">

    <meta name="theme-color" content="#ffffff">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="style.css" />
    <LINK href="scripts/modal.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
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

        body {
            transition: opacity 0.5s ease;
        }

        body.hidden {
            opacity: 0;
        }

        p {
            line-height: 2
        }

        button {
            padding: 0.1em 2em;
            border-radius: 15px;
            cursor: pointer;
            border: 1px <?php echo $warna5; ?> solid;
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

        #envelope {
            background-color: #fff;
            width: 100%;
            max-width: 800px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            /* Refined shadow */
            text-align: center;
            transition: transform 1s ease-in-out, opacity 1s ease-in-out, height 1s ease-in-out, padding 1s ease-in-out;
            /* Added height and padding transitions */
            display: flex;
            /* For centering the button */
            flex-direction: column;
            justify-content: center;
            /* Vertically center content */
            align-items: center;
            min-height: 200px;
            /* Ensure minimum height for content */
            box-sizing: border-box;
            /* Include padding in height calculation */
            overflow: hidden;
            /* hide overflowing button on open animation */
            background-image: url("material/Millianto Web material-11.jpg");
            background-size: 100%;
            background-repeat: no-repeat;
            /*transform-origin: top center;  Add this line */
        }

        #envelope.open {
            transform: translateY(-120%) scale(1.1);
            /* Move and scale up */
            opacity: 0;
            height: 0;
            /* Collapse the height */
            padding: 0;
            /* Remove padding */
            margin-bottom: -200px;
            /* fix jump */
        }

        #envelope.open #open-invitation {
            display: none;
        }

        #invitation-content {
            display: none;
            /* Initially hide the invitation */
            background-color: #fff;
            width: 100%;
            /* Responsive width */
            max-width: 800px;
            /* Max width for larger screens */
            padding: 0px;
            /* Increased padding for content */
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            /* Refined shadow */
            text-align: center;
            /*margin-top: 20px;*/
            /* Add space between envelope and invitation */
            opacity: 0;
            /* Start with 0 opacity */
            transition: opacity 0.5s ease, transform 0.5s ease;
            /* Add transform transition */
            transform: translateY(100px);
            /* Start slightly below its final position */
        }

        #invitation-content.show {
            display: block;
            opacity: 1;
            transform: translateY(0);
        }

        #open-invitation {
            padding: 0px 0px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        #open-invitation:hover {
            transform: scale(1.05);
        }

        #open-invitation:active {
            transform: scale(0.95);
        }


        @media (max-width: 600px) {
            #envelope {
                width: 100%;
            }

            #invitation-content {
                width: 100%;
            }
        }
    </style>
</head>
<?php
include("function.php");
$mod = @$_GET['mod'];

if (!empty($mod)) {
    echo "<body class='fo3 bg2' onload='openModal()'>";
} else {
    echo "<body class='fo3 bg2'>";
}

$action = @$_POST['action'];
if ($action == "gb") {
    $nama = $_POST['nama'];
    $ucapan = $_POST['ucapan'];
    $tgl = date("Y-m-d");
    if ((!empty($ucapan)) && (!empty($nama))) {
        $qu = "INSERT INTO " . $folder2 . "1 SET tgl='$tgl', nama='$nama', ucapan='$ucapan'";
        //echo $qu;
        mysqli_query($conn, $qu) or die(mysqli_error($conn));
        pesan("Ucapan terkirim. Terima kasih.");
    } else pesan("Isilah nama dan ucapan anda!");
}

if ($action == "rsvp") {
    $nama = $_POST['nama'];
    $guest = $_POST['guest'];
    $whatsapp = $_POST['whatsapp'];
    $pihak = $_POST['pihak'];
    if (!empty($nama)) {
        $qu = "INSERT INTO " . $folder2 . "2 SET nama='$nama', guest='$guest', whatsapp='$whatsapp', pihak='$pihak'";
        //$qu = "INSERT INTO " . $folder2 . "2 SET nama='$nama', guest='$guest', pihak='$pihak'";
        //$qu = "INSERT INTO " . $folder2 . "2 SET nama='$nama', guest='$guest'";
        mysqli_query($conn, $qu) or die(mysqli_error($conn));
        pesan("RSVP terkirim. Terima kasih.");
    } else pesan("Mohon isi nama anda!");
}

?>

<div id="envelope">
    <?php include("envelope.php"); ?>
</div>

<div id="invitation-content">
    <table width="100%" style="background:url(material/Millianto%20Web%20material-12.jpg); background-size:100%; background-repeat:no-repeat;">
        <tr>
            <td align="center">
                <div data-aos="fade-up"
                    data-aos-duration="3000">
                    <div style="height: 670px;"></div>
                    <p align="center" class="w3-tiny fo3" style="font-family:'bodoni'; letter-spacing:1px; line-height:20px;">
                        <i>
                            "Dan di atas semuanya itu: kenakanlah kasih,<br>
                            sebagai pengikat yang mempersatukan dan menyempurnakan.<br>
                            Hendaklah damai sejahtera Kristus memerintah dalam hatimu,<br>
                            karena untuk itulah kamu telah dipanggil menjadi satu tubuh.<br>
                            Dan bersyukurlah."
                            <br><br>
                            <font class="w3-medium">Kolose 3 : 14-15</font>
                        </i>
                    </p>
                </div>
            </td>
        </tr>
    </table>
    <br><br><br>
    <div align="center" class="w3-small" style="font-family:aboretoi;" data-aos="fade-up" data-aos-easing="ease-out-back">
        <table width="80%" align="center" border="0">
            <tr valign="middle">
                <td align="right">
                    <div style="display: flex; align-items: right;">
                        <button id="playBtn" class="bg5 fo2" style="border-radius: 100px;">
                            <i class="fa-solid fa-circle-play"></i>
                        </button>
                        <button id="pauseBtn" class="bg5 fo2" style="border-radius: 100px; display: none;">
                            <i class="fa-solid fa-circle-pause"></i>
                        </button>
                        <audio id="audioID" loop style="display: none;">
                            <source src="song.mp3" type="audio/mpeg">
                        </audio>
                    </div>
                </td>
                <td align="left" class="fo3">
                    WESTLIFE<br><i class="fa-solid fa-music"> I Wanna Grow Old With You</i>
                </td>
            </tr>
        </table>
    </div>
    <br><br>
    <table width="100%" style="background:url(material/Febi%20Website%20material-13.png); background-size:100%; background-repeat:no-repeat;">
        <tr>
            <td align="center">
                <div class="fo3 w3-xlarge" style="font-family:'Cinzel Decorative'; line-height:20px;" data-aos="fade-up"
                    data-aos-easing="ease-out-cubic"
                    data-aos-duration="2000"
                    align=left>
                    Millianto Yaparto
                    <br>
                    <font style="font-family: aboreto;" class="w3-tiny">PUTRA KEDUA ARIF GANI YAPARTO & MARIA YASHINTA NOVIANY HARDJONO</font>
                </div>
                <br>
                <div data-aos="zoom-in-up">
                    <img src="material/Millianto Web material-13.jpg" style="width: 100%;">
                </div>
                <br>
                <div class="fo3 w3-xlarge" style="font-family:'Cinzel Decorative'; line-height:20px;" data-aos="fade-up"
                    data-aos-easing="ease-out-cubic"
                    data-aos-duration="2000"
                    align=right>
                    Meike Gosal, S.M.
                    <br>
                    <font style="font-family: aboreto;" class="w3-tiny">PUTRI BUNGSU FREDIYANTO GOSAL (&#10013;) & FINCE MUSTAMU</font>
                </div>
                <br>
            </td>
        </tr>
    </table>
    <br>
    <div style="background:url(material/Millianto%20Web%20material-14.jpg); background-size:100%; background-repeat:no-repeat;">
        <table width="90%" align="center">
            <tr>
                <td align="center">
                    <br>
                    <div data-aos="zoom-in-up">
                        <img src="material/Millianto Web material-18.png" style="width: 15%;">
                    </div>
                    <br>
                    <div data-aos="fade-up" style="font-family: minion;" class="fo2 w3-small">
                        Oleh kasih dan anugerah Tuhan, perkenankan kami<br>
                        mengundang Bapak / Ibu / Saudara (i)<br>
                        untuk menghadiri resepsi pernikahan<br>
                        putra-putri kami tercinta
                    </div>
                    <br>
                    <div data-aos="fade-up" style="font-family: minion;" class="fo2">
                        <img src="material/Millianto Web material-22.png" style="width: 40%;">
                    </div>
                    <br>
                    <div align="center" style="font-family: minion;" class="fo2">
                        <div data-aos="fade-up" class="w3-large">
                            PEMBERKATAN NIKAH
                        </div>
                        <div data-aos="fade-up" class="w3-small">
                            Pukul 13:30 WITA
                        </div>
                        <div data-aos="fade-up" class="w3-margin">
                            <img src="material/Millianto Web material-19.png" style="width: 15%;">
                        </div>
                        <div data-aos="fade-up" style="line-height:17px; font-family:minion;" class="w3-small">
                            MACORA 2 - HOTEL THE RINRA<br>
                            <i>Jl. Metro Tanjung Bunga No. 2<br>Makassar</i>
                        </div>
                        <div data-aos="fade-up">
                            <a href="https://maps.app.goo.gl/xadfVivNwC1qXXKJA" target="_blank">
                                <img src="material/Millianto Web material-21.png" style="width: 35%; cursor: pointer;">
                            </a>
                        </div>
                        <div style="height: 30px;"></div>
                        <div data-aos="fade-up" class="w3-large">
                            RESEPSI PERNIKAHAN
                        </div>
                        <div data-aos="fade-up" class="w3-small">
                            Pukul 18:30 WITA
                        </div>
                        <div data-aos="fade-up" class="w3-margin">
                            <img src="material/Millianto Web material-20.png" style="width: 15%;">
                        </div>
                        <div data-aos="fade-up" style="line-height:17px; font-family:minion;" class="w3-small">
                            THE UPPERHILLS CONVENTION HALL<br>
                            <i>Jl. Metro Tanjung Bunga No. 995<br>Makassar</i>
                        </div>
                        <div data-aos="fade-up">
                            <a href="https://maps.app.goo.gl/HLM92Eh1obwKQJag6" target="_blank">
                                <img src="material/Millianto Web material-21.png" style="width: 35%; cursor: pointer;">
                            </a>
                        </div>
                </td>
            </tr>
        </table>
        <br>
    </div>
    <div style="background:url(material/Millianto%20Web%20material-15.jpg); background-size:100%; background-repeat: no-repeat;">
        <div class="w3-center">
            <table width="100%" align="center">
                <tr>
                    <td align="center" class="fo2">
                        <div style="height: 650px;"></div>
                        <div data-aos="slide-right">
                            <font class="w3-xlarge fo2" style="font-family:cinzel;"><b>MENUJU HARI H</b></font>
                        </div>
                        <!--
                    <div data-aos="slide-right">
                        <font class="w3-medium" style="font-family:trajan;">MENUJU HARI H</font>
                    </div>
                    -->
                        <!-- Display the countdown timer in an element -->
                        <div data-aos="slide-right">
                            <b>
                                <font id="demo" style="font-family:cinzel;" class="w3-xxxlarge fo2"></font>
                            </b>
                        </div>
                        <div data-aos="slide-right" style="font-family:cinzel;" class="w3-small fo2">
                            <!--
                        Day(s) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        Hour(s) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        Minute(s) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        Second(s)
                        -->

                            HARI &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            JAM &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            MENIT &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            DETIK
                        </div>
                        <div style="height: 100px;"></div>
                        <script>
                            // Set the date we're counting down to
                            var countDownDate = new Date("May 30, 2025 13:30:00").getTime();

                            // Update the count down every 1 second
                            var x = setInterval(function() {

                                // Get today's date and time
                                var now = new Date().getTime();

                                // Find the distance between now and the count down date
                                var distance = countDownDate - now;

                                // Time calculations for days, hours, minutes and seconds
                                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                                // Display the result in the element with id="demo"
                                //document.getElementById("demo").innerHTML = days + " Day(s) &nbsp;&nbsp;" + hours + " Hour(s) <br>"
                                //+ minutes + " Minute(s) &nbsp;&nbsp;" + seconds + " Second(s)";
                                document.getElementById("demo").innerHTML = days + " : " + hours + " : " +
                                    minutes + " : " + seconds;

                                // If the count down is finished, write some text
                                if (distance < 0) {
                                    clearInterval(x);
                                    document.getElementById("demo").innerHTML = "SELESAI";
                                }
                            }, 1000);
                        </script>
                    </td>
                </tr>
            </table>
        </div>
        <br>
    </div>
    <div align=right>
        <img src="material/Millianto Web material-25.png" style="width: 60%; margin-right:-80px;">
    </div>
    <table class="w3-medium" style="margin-bottom:-130px; margin-top:-100px; background:url(material/Millianto%20Web%20material-28.png); background-size:100%; background-repeat: no-repeat; font-family:bodoni;" align="center" width="100%" id="rsvp">
        <tr>
            <td align="center">
                <div style="height: 100px;"></div>
                <div data-aos="fade-up"
                    data-aos-anchor-placement="top-bottom">
                    <font class="w3-xxlarge fo4" style="font-family: afterglow;">R S V P</font>
                </div>
                <div style="height: 20px;"></div>
                <div data-aos="fade-up" style="font-family: bodoni;" class="w3-small fo5">
                    <i>Bantu kami mempersiapkan jamuan yang<br>
                        hangat untuk Anda semua dengan mengirimkan<br>
                        konfirmasi kehadiran melalui form berikut ini:</i>
                </div>
                <div style="height: 30px;"></div>
                <div data-aos="fade-up">
                    <form action="index.php" method="post" onsubmit="return confirm('Kirim RSVP?');" id="myForm1">
                        <div style="line-height:38px;">
                            <input class="w3-small" type="text" name="nama" value="<?php echo $to; ?>" style="width:50%; border-radius:10px; height:30px; border-color:gold;">
                            <br>
                            <select class="w3-small" style="width:50%; border-radius:10px; height:30px; border-color:gold;" name="guest">
                                <option value="0">0 orang (tidak hadir)</option>
                                <option value="1" <?php if ($guest == 1) echo "selected"; ?>>1 orang hadir</option>
                                <option value="2" <?php if ($guest == 2) echo "selected";
                                                    if ($guest < 2) echo "disabled"; ?>>2 orang hadir</option>
                                <option value="3" <?php if ($guest == 3) echo "selected";
                                                    if ($guest < 3) echo "disabled"; ?>>3 orang hadir</option>
                                <option value="4" <?php if ($guest == 4) echo "selected";
                                                    if ($guest < 4) echo "disabled"; ?>>4 orang hadir</option>
                            </select>

                            <select class="w3-small" name="pihak" style="border-radius:10px; width:50%; height:30px; border-color:gold;">
                                <option value="Pria">Pihak Mempelai Pria</option>
                                <option value="Wanita">Pihak Mempelai Wanita</option>
                            </select>
                            <br>
                            <input class="w3-small" type="text" name="whatsapp" style="width:50%; border-radius:10px; height:30px; border-color:gold;" placeholder="WhatsApp">
                            <button type="submit" name="action" value="rsvp" class="bg4 w3-text-white" style="width: 50%; border-color:gold;">Kirim</button>
                        </div>
                    </form>
                </div>
                <div style="height: 200px;"></div>
            </td>
        </tr>
    </table>
    <div align=left>
        <img src="material/Millianto Web material-26.png" style="width: 60%; margin-left:-120px;">
    </div>
    <div class="bg1" align="center" style="background:url(material/Millianto%20Web%20material-25.png); background-size:70%; background-repeat:no-repeat; background-position:260px 0;">
        <br><br>
        <div data-aos="flip-left"
            data-aos-easing="ease-out-cubic"
            data-aos-duration="2000">
            <img src="material/Millianto Web material-27.png" style="width: 80%;">
        </div>
    </div>
    <form action="index.php#" method="post" onSubmit="return confirm('Kirimkan pesan ini?');" id="myForm2">
        <input type="hidden" name="action" value="gb">
        <div data-aos="fade-up">
            <table align="center" style="font-family:minion;" width="60%">
                <tr>
                    <td><input class="w3-small" name="nama" type="text" style="font-family:minion; border:1; border-radius:5px; width:100%; border-color:gold;" placeholder="Nama"></td>
                </tr>
                <tr>
                    <td>
                        <textarea placeholder="Doa & ucapan untuk Millianto & Meike" class="w3-small" name="ucapan" style="font-family:minion; border:1; border-radius:5px; width:100%; border-color:gold;" rows="3"></textarea>
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <button class="bg4 w3-text-white" type="submit" style="border-radius:5px; font-family:minion; width:100%; border-color:gold;">Kirim</button>
                    </td>
                </tr>
            </table>
        </div>
    </form>
    <div align="center" style="height:300px;" id="gb">
        <br>
        <div style="height: calc(100% - 30px); overflow:scroll;">
            <div align="center" style="font-family: minion;">
                <br>
                <?php
                $qu = "SELECT * FROM " . $folder2 . "1 ORDER BY tgl DESC,id DESC";
                $q = mysqli_query($conn, $qu);
                if (mysqli_num_rows($q) > 0) {
                    while ($qq = mysqli_fetch_array($q)) {
                        $ucapan = str_replace("\n", "<br>", $qq['ucapan']);
                ?>
                        <div class="w3-content w3-center" style="line-height:10px;">
                            <table class="w3-small fo5" style="font-family:aboreto; background:<?php echo $warna1; ?>; border-radius:5px; border:1px solid <?php echo $warna5; ?>; padding:5px;" width="80%" align="center">
                                <tr>
                                    <td align="left" style="line-height:17px;">
                                        <i class="fa-solid fa-user-large"></i> <?php echo $qq['nama']; ?>
                                    </td>
                                    <td align="right"><i class="fa-solid fa-calendar-days"></i> <?php echo date("d M Y", strtotime($qq['tgl'])); ?></td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="left">
                                        <?php echo $ucapan; ?>
                                    </td>
                                </tr>
                            </table>
                            <br>
                        </div>
                    <?php
                    }
                } else {
                    ?>
                    <font class="w3-large fo5" style="font-family: aboretoi;">Buku Tamu masih kosong.<br>Isi form di atas untuk beri ucapan pertama!</font>
                <?php
                }
                ?>
            </div>
        </div>
        <br>
    </div>
    <div style="height: 100px;"></div>
    <div data-aos="fade-up" style="font-family: bodoni;" class="w3-small fo3" align=center>
        Tanpa mengurangi rasa hormat, bagi Anda<br>
        yang ingin memberikan tanda kasih untuk<br>
        kami, dapat melalui:
    </div>
    <div style="height: 20px;"></div>
    <div align=center data-aos="fade-up">
        <img src="material/Millianto Web material-29.png" style="width: 50%;">
    </div>
    <div style="height: 10px;"></div>
    <div data-aos="fade-up" style="font-family: bodoni;" class="fo3" align=center>
        BCA<br>
        No. Rekening 1580087244<br>
        a.n Meike Gosal
    </div>
    <div style="height: 100px;"></div>
    <img src="material/Millianto Web material-16.jpg" style="width: 100%;">
    <div style="height: 50px;"></div>
    <div style="margin-left: 30px;">
        <img src="material/Millianto Web material-30.png" style="width: 60%;">
    </div>
    <div style="height: 50px;"></div>
    <img src="material/Millianto Web material-17.jpg" style="width: 100%;">
    <img src="material/Millianto Web material-10.jpg" style="width: 100%;">

    <?php
    include("modal.php");
    ?>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js">
</script>
<script>
    AOS.init({
        duration: 2000
    });
</script>
<script>
    function myFunction() {
        var x = document.getElementById("myDIV");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
</script>
<script>
    const [fn, ln, out] = "firstName,lastName,nameOutput"
    .split(",").map(id => document.getElementById(id));

    document.body.addEventListener("input", showit);
    showit();

    function showit() {
        out.textContent = `RSVP ${fn.value} ${ln.value}`
    }
</script>

<script>
    const envelope = document.getElementById('envelope');
    const invitationContent = document.getElementById('invitation-content');
    const openInvitationButton = document.getElementById('open-invitation');
    const body = document.querySelector('body');
    const form1 = document.getElementById('myForm1');
    const form2 = document.getElementById('myForm2');


    const audio = document.getElementById('audioID');
    const playButton = document.getElementById('playBtn');
    const pauseButton = document.getElementById('pauseBtn');
    let isPlaying = false;

    // Function to play the audio
    function playAudio() {
        audio.play()
            .then(() => {
                isPlaying = true;
                playButton.style.display = 'none';
                pauseButton.style.display = 'inline-block';
            })
            .catch(error => {
                // Attempt to play again on user interaction
                playButton.addEventListener('click', playOnFirstInteraction);
                playButton.style.display = 'inline-block';
                pauseButton.style.display = 'none';
            });
    }

    // Function to pause the audio
    function pauseAudio() {
        audio.pause();
        isPlaying = false;
        playButton.style.display = 'inline-block';
        pauseButton.style.display = 'none';
    }

    // Event listener for the play button
    playButton.addEventListener('click', playAudio);
    pauseButton.addEventListener('click', pauseAudio);


    openInvitationButton.addEventListener('click', () => {
        envelope.classList.add('open');
        // Use a setTimeout to delay the appearance of the invitation content
        setTimeout(() => {
            invitationContent.classList.add('show');
            body.classList.add('hidden'); //hide scrollbar
            setTimeout(() => {
                body.classList.remove('hidden');
            }, 1000);
        }, 500); // 500ms delay, adjust as needed for transition timing
        playAudio(); // Play audio when the button is clicked.
    });

    // Attempt to autoplay on page load
    document.addEventListener('DOMContentLoaded', () => {
        //playAudio(); // removed autoplay
        // Check if the form has been submitted
        if (sessionStorage.getItem('formSubmitted') === 'true') {
            envelope.classList.add('open');
            invitationContent.classList.add('show');
            body.classList.add('hidden');
            setTimeout(() => {
                body.classList.remove('hidden');
            }, 1000);

            // Scroll to the form
            const formId = sessionStorage.getItem('formId');
            const formElement = document.getElementById(formId);
            if (formElement) {
                formElement.scrollIntoView({
                    behavior: 'smooth'
                });
            }


            // Clear the session storage flag
            sessionStorage.removeItem('formSubmitted');
            sessionStorage.removeItem('formId');
        }
    });

    // Handle visibility change (important for some browsers' autoplay policies)
    document.addEventListener('visibilitychange', () => {
        if (!document.hidden && !isPlaying) {
            playAudio();
        } else if (document.hidden && isPlaying) {
            pauseAudio();
        }
    });

    //listen for form submission
    form1.addEventListener('submit', () => {
        sessionStorage.setItem('formSubmitted', 'true');
        sessionStorage.setItem('formId', 'myForm1');
    });

    form2.addEventListener('submit', () => {
        sessionStorage.setItem('formSubmitted', 'true');
        sessionStorage.setItem('formId', 'myForm2');
    });
</script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>

</body>

</html>
