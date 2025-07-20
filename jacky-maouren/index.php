<?php include("colors.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <title><?php echo $judul; ?></title>

    <meta property="og:title" content="<?php echo $judul; ?>" />
    <meta property="og:description" content="You are Invited!" />
    <meta property="og:url" content="https://lovebirdsgallery.com/<?php echo $folder; ?>/" />
    <meta property="og:image" itemprop="image" content="https://lovebirdsgallery.com/<?php echo $folder; ?>/material/thumbnail.jpg" />
    <meta property="og:type" content="website" />

    <link rel="apple-touch-icon" sizes="180x180" href="../.favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../.favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../.favicon/favicon-16x16.png">
    <link rel="manifest" href="../.favicon/site.webmanifest">

    <meta name="theme-color" content="#ffffff">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="../.scripts/fonts.css" />
    <link rel="stylesheet" href="../.scripts/styles.css" />

    <?php include("../.scripts/styles.php"); ?>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant:wght@300&display=swap" rel="stylesheet">
    <style>
        .cormorant {
            font-family: "Cormorant", serif;
            font-optical-sizing: auto;
            font-weight: 300;
            font-style: normal;
        }
    </style>
</head>

<?php
include("../.scripts/function.php");
include("../.scripts/handlers.php");
?>

<body class="fo3 bg1">
    <!-- <div class="loading-screen" id="loadingScreen">
        <div class="loader"></div>
        <div class="loading-text">Loading...</div>
        <div class="progress-bar">
            <div class="progress" id="progressBar"></div>
        </div>
    </div>
    <div id="websiteContent" style="display: none;"> -->
    <div id="websiteContent">
        <div id="envelope">
            <?php include("envelope.php"); ?>
        </div>

        <div id="invitation-content" class="fo5 bg1">
            <img src="material/bg1.png" style="width: 100%;">
            <img src="material/logo2.png" style="width: 55%; margin-top:-170px;">
            <br><br>
            <div align="center" class="w3-small" data-aos="slide-right" data-aos-easing="ease-out-back">
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
                                    <source src="material/song.mp3" type="audio/mpeg">
                                </audio>
                            </div>
                        </td>
                        <td align="left" class="fo3">
                            Mateo Oxley feat. Beth<i class="fa-solid fa-music"> Come What May</i>
                        </td>
                    </tr>
                </table>
            </div>
            <br><br>
            <div align=left>
                <img src="material/flower1.png" style="width: 250px; height:300px; object-fit: cover; object-position: -100px 0; z-index:-1; position:relative;">
            </div>
            <div style="background:url(material/box1.png); background-size:100%; background-repeat:no-repeat; margin-top:-200px;">
                <div style="height: 100px;"></div>
                <div data-aos="fade-up">
                    <img src="material/bg2.png" style="width: 50%;">
                </div>
                <div style="height: 30px;"></div>
                <div style="font-family: minioni;" class="w3-small" data-aos="fade">
                    "So they are no longer two, but
                    <div style="font-family: claytona;" class="w3-xxlarge">
                        One Flesh
                    </div>
                    Therefore what God has joined together,<br>
                    let no one separate."<br><br>
                    (Matthew 19 : 6)
                </div>
                <div style="height: 100px;"></div>
            </div>
            <div align=right>
                <img src="material/flower1.png" style="width: 250px; height:350px; object-fit: cover; object-position: 100px 0; z-index:-1; position:relative; margin-top:-100px;">
            </div>
            <div style="background:url(material/bg3.png); background-size:100%; background-repeat:no-repeat; margin-top:-100px;">
                <div data-aos="fade">
                    <img src="material/logo3.png" style="width: 50%; margin-top:50px;">
                </div>
                <div style="height: 600px;"></div>
            </div>
            <div data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                <div style="font-family: cinzel; line-height:45px;" class="fo4 w3-xxxlarge" align=center>
                    JACKY
                    <div class="w3-xlarge">
                        DJIWONO JIE
                    </div>
                </div>
                <div style="height: 10px;"></div>
                <div style="font-family: trajan;" class="fo3 w3-tiny" align=center>
                    PUTRA SULUNG ANAK KETIGA DARI<br>
                    TN. JIMMY DJIWONO JIE & NY. LANNY CHANDRA
                </div>
            </div>
            <br>
            <div style="font-family: manstein; font-size:30px;" class="fo3" align=center data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                &
            </div>
            <div style="height:10px;"></div>
            <div data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                <div style="font-family: cinzel; line-height:45px;" class="fo4 w3-xxxlarge" align=center>
                    MAOUREN
                    <div class="w3-xlarge">
                        ANGEL SUWANDI, S. AK.
                    </div>
                </div>
                <div style="height: 10px;"></div>
                <div style="font-family: trajan;" class="fo3 w3-tiny" align=center>
                    PUTRI TUNGGAL ANAK PERTAMA DARI<br>
                    TN. RONNY & NY. MERIAM
                </div>
            </div>
            <div style="background:url(material/box2.png); background-size:100%; background-repeat:no-repeat;">
                <div style="height: 100px;"></div>
                <table width="80%" align="center" style="font-family:minion; background:url(material/bg4.png); background-size:100%; background-repeat:no-repeat;" class="fo2">
                    <tr>
                        <td align="center" style="padding-left: 5px; padding-right:5px;">
                            <div style="height: 20px;"></div>
                            <div data-aos="fade-up">
                                <img src="../.images/shuangxi1.png" style="width: 20%;"><br>
                            </div>
                            <div style="height: 20px;"></div>
                            <!--
                            <div data-aos="fade-up" class="w3-small">
                                 By the grace and blessings of the Lord,<br>
                            we cordially invite you
                            -->
                            <div data-aos="fade-up" class="w3-tiny">
                                Oleh kasih dan karunia Tuhan,<br>
                                Ia telah mempertemukan & mempersatukan<br>
                                putra - putri kami dalam ikatan pernikahan yang kudus
                            </div>
                            <br>
                            <div data-aos="fade-up" style="letter-spacing: 2px; line-height:15px;">
                                PEMBERKATAN NIKAH
                                <br>
                                <font class="w3-tiny">SABTU, 09 AGUSTUS 2025<br>Pukul 12.00 WITA</font>
                            </div>
                            <div data-aos="fade-up">
                                <img src="../.images/church.png" style="width: 20%; padding-top:10px; padding-bottom:10px;">
                            </div>
                            <div data-aos="fade-up" class="w3-small" style="letter-spacing: 2px; line-height:15px;">
                                GEREJA KATOLIK KRISTUS RAJA<br>
                                <font style="font-style:italic; letter-spacing: 1px;">
                                    Jl. Andalas No. 61<br>
                                    Makassar
                                </font>
                            </div>
                            <div data-aos="fade-up">
                                <!-- <button onClick="window.open('https://maps.app.goo.gl/BvZEfxKT8dpCYuEv7');" style="border-radius:20px;" class="w3-white"><i class="fa-solid fa-location-dot"></i>&nbsp;&nbsp;&nbsp;&nbsp;<i>Lihat Lokasi</i></button> -->
                                <a href="https://maps.app.goo.gl/pYwssFH8QoqheZNE7" target="_blank">
                                    <img src="material/location.png" style="width: 120px;">
                                </a>
                            </div>
                            <div style="height: 40px;"></div>
                            <div data-aos="fade-up" style="letter-spacing: 2px; line-height:15px;">
                                RESEPSI PERNIKAHAN
                                <br>
                                <font class="w3-tiny">SABTU, 09 AGUSTUS 2025<br>Pukul 18.30 WITA</font>
                            </div>
                            <div data-aos="fade-up">
                                <img src="../.images/reception.png" style="width: 20%; padding-top:10px; padding-bottom:10px;">
                            </div>
                            <div data-aos="fade-up" class="w3-small" style="letter-spacing: 2px; line-height:15px;">
                                REST. BAMBUDEN III LT. 2<br>
                                <font style="font-style:italic; letter-spacing: 1px;">
                                    Jl. Gunung Latimojong No. 62<br>
                                    Makassar
                                </font>
                            </div>
                            <div data-aos="fade-up">
                                <!-- <button onClick="window.open('https://maps.app.goo.gl/BvZEfxKT8dpCYuEv7');" style="border-radius:20px;" class="w3-white"><i class="fa-solid fa-location-dot"></i>&nbsp;&nbsp;&nbsp;&nbsp;<i>Lihat Lokasi</i></button> -->
                                <a href="https://maps.app.goo.gl/1cBExW12UydFtdBq7" target="_blank">
                                    <img src="material/location.png" style="width: 120px;">
                                </a>
                            </div>
                            <div style="height: 50px;"></div>
                        </td>
                    </tr>
                </table>
                <div style="height: 50px;"></div>
            </div>

            <div style="background:url(material/bgcountdown.png); background-size:100%; background-repeat: no-repeat;">
                <div class="w3-center">
                    <table width="100%" align="center">
                        <tr>
                            <td align="center" class="fo2">
                                <div style="height: 430px;"></div>
                                <div data-aos="slide-right">
                                    <img src="material/logo4.png" style="width:60%; padding-bottom:20px;">
                                </div>
                                <div data-aos="slide-right">
                                    <font class="w3-large fo2" style="font-family:cinzel;">
                                        <b>
                                            MENUJU HARI H
                                            <!-- COUNTING DOWN TO THE BIG DAY -->
                                        </b>
                                    </font>
                                </div>
                                <!-- Display the countdown timer in an element -->
                                <div data-aos="slide-right">
                                    <b>
                                        <font id="demo" style="font-family:cinzel;" class="w3-xxxlarge fo2"></font>
                                    </b>
                                </div>
                                <div data-aos="slide-right" style="font-family:cinzel;" class="w3-small fo2">

                                    <!-- Day(s) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                Hour(s) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                Minute(s) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                Second(s) -->

                                    HARI &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    JAM &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    MENIT &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    DETIK
                                </div>
                                <div style="height: 100px;"></div>
                                <script>
                                    // Set the date we're counting down to
                                    var countDownDate = new Date("August 9, 2025 12:30:00").getTime();

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
            <div align=left>
                <img src="material/flower1.png" style="width: 250px; height:300px; object-fit: cover; object-position: -100px 0; z-index:-1; position:relative; margin-top:-100px;">
            </div>
            <table class="w3-medium" style="background:url(material/box1.png); background-size:100%; background-repeat: no-repeat; margin-top:-250px;" align="center" width="100%" id="rsvp">
                <tr>
                    <td align="center">
                        <div style="height: 140px;"></div>
                        <div data-aos="fade-up"
                            data-aos-anchor-placement="top-bottom">
                            <font class="w3-xxlarge fo5" style="font-family: greatvibes;">R S V P</font>
                        </div>
                        <div style="height: 30px;"></div>
                        <div data-aos="fade-up" style="font-family: minion;" class="w3-small fo5">
                            Bantu kami mempersiapkan jamuan yang<br>
                            hangat untuk Anda semua dengan mengirimkan<br>
                            konfirmasi kehadiran melalui form berikut ini:
                            <!-- Help us prepare the best to host you<br>
                                on our wedding day by filling out<br>
                                the information below.-->
                        </div>
                        <div style="height: 30px;"></div>
                        <div data-aos="fade-up">
                            <form action="#myForm1" method="post" onsubmit="return confirm('Send RSVP?');" id="myForm1">
                                <div style="line-height:38px;">
                                    <input class="w3-small fo5" type="text" name="nama" value="<?php echo $to; ?>" style="width:50%; border-radius:10px; height:30px;" required>
                                    <br>
                                    <!--
                                    <select class="w3-small fo5" style="width:50%; border-radius:10px; height:30px;" name="guest">
                                        <option value="0">Not attending</option>
                                        <option value="1" <?php if ($guest == 1) echo "selected"; ?>>1 guest</option>
                                        <option value="2" <?php if ($guest == 2) echo "selected";
                                                            if ($guest < 2) echo "disabled"; ?>>2 guests</option>
                                        <option value="3" <?php if ($guest == 3) echo "selected";
                                                            if ($guest < 3) echo "disabled"; ?>>3 guests</option>
                                        <option value="4" <?php if ($guest == 4) echo "selected";
                                                            if ($guest < 4) echo "disabled"; ?>>4 guests</option>
                                    </select>

                                    <select class="w3-small fo5" name="pihak" style="border-radius:10px; width:50%; height:30px;">
                                        <option value="Pria">Groom's side</option>
                                        <option value="Wanita">Bride's side</option>
                                    </select>
                                    -->
                                    <select class="w3-small" style="width:50%; border-radius:10px; height:30px; border-color:gold;" name="guest">
                                        <option value="0">Tidak hadir</option>
                                        <option value="1" <?php if ($guest == 1) echo "selected"; ?>>1 tamu</option>
                                        <option value="2" <?php if ($guest == 2) echo "selected";
                                                            if ($guest < 2) echo "disabled"; ?>>2 tamu</option>
                                        <option value="3" <?php if ($guest == 3) echo "selected";
                                                            if ($guest < 3) echo "disabled"; ?>>3 tamu</option>
                                        <option value="4" <?php if ($guest == 4) echo "selected";
                                                            if ($guest < 4) echo "disabled"; ?>>4 tamu</option>
                                    </select>

                                    <select class="w3-small" name="pihak" style="border-radius:10px; width:50%; height:30px; border-color:gold;">
                                        <option value="Pria">Pihak mempelai pria</option>
                                        <option value="Wanita">Pihak mempelai wanita</option>
                                    </select>
                                    <br>
                                    <!-- <input class="w3-small" type="text" name="whatsapp" style="width:50%; border-radius:10px; height:30px; border-color:gold;" placeholder="WhatsApp"> -->
                                    <button type="submit" name="action" value="rsvp" class="bg5 fo2" style="width: 50%;;">Kirim</button>
                                </div>
                            </form>
                        </div>
                        <div style="height: 250px;"></div>
                    </td>
                </tr>
            </table>
            <div align=right>
                <img src="material/flower1.png" style="width: 250px; height:350px; object-fit: cover; object-position: 100px 0; z-index:-1; position:relative; margin-top:-250px;">
            </div>
            <div style="background:url(material/bg5.png); background-size:100%; background-repeat:no-repeat; margin-top:-150px;">
                <div style="height: 250px;"></div>
                <div data-aos="fade-up">
                    <img src="material/logo5.png" style="width:70%;">
                </div>
                <div style="height: 450px;"></div>
            </div>

            <div style="font-family:greatvibes;" class="w3-xxlarge fo5" data-aos="fade-up">
                Photo Gallery
            </div>
            <div style="height: 60px;"></div>
            <div data-aos="fade-up">
                <img src="material/gallery1.png" style="width: 80%;">
            </div>
            <div style="height: 30px;"></div>
            <div data-aos="fade-up">
                <img src="material/gallery2.png" style="width: 80%;">
            </div>
            <div style="height: 30px;"></div>
            <div data-aos="fade-up">
                <img src="material/gallery3.png" style="width: 80%;">
            </div>
            <div style="height: 30px;"></div>
            <div data-aos="fade-up">
                <img src="material/gallery4.png" style="width: 80%;">
            </div>
            <div style="height: 30px;"></div>
            <div data-aos="fade-up">
                <img src="material/gallery5.png" style="width: 80%;">
            </div>
            <div style="height: 30px;"></div>
            <div data-aos="fade-up">
                <img src="material/gallery6.png" style="width: 80%;">
            </div>
            <div style="height: 30px;"></div>

            <div class="w3-medium" style="background:url(material/box1.png); background-size:100%; background-repeat: no-repeat;" align="center" width="100%" id="rsvp">
                <div style="height: 200px;"></div>
                <div data-aos="flip-left"
                    data-aos-easing="ease-out-cubic"
                    data-aos-duration="2000">
                    <div style="font-family:greatvibes; line-height:32px; letter-spacing:2px;" class="w3-xxlarge fo5">
                        Tuliskan<br>
                        <span class="w3-xlarge">Pesan & Doa Anda</span>
                    </div>
                </div>
                <br>
                <form action="#myform2" method="post" onSubmit="return confirm('Kirimkan pesan ini?');" id="myForm2">
                    <input type="hidden" name="action" value="gb">
                    <div data-aos="fade-up">
                        <table align="center" style="font-family:minion;" width="60%">
                            <tr>
                                <td><input class="w3-small fo5" name="nama" type="text" style="font-family:minion; border:1; border-radius:5px; width:100%;;" placeholder="Nama"></td>
                            </tr>
                            <tr>
                                <td>
                                    <textarea placeholder="Pesan & doa untuk Jacky & Maouren" class="w3-small fo5" name="ucapan" style="font-family:minion; border:1; border-radius:5px; width:100%;" rows="3"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td align="center">
                                    <button class="bg5 fo2" type="submit" style="border-radius:5px; font-family:minion; width:100%;;">Kirim</button>
                                </td>
                            </tr>
                        </table>
                    </div>
                </form>
                <div style="height: 190px;"></div>
            </div>
            <div style="height: 10px;"></div>
            <div style="font-style: italic; font-family:minion;" data-aos="fade">
                Terima kasih atas ucapan, doa dan kesediaan Anda<br>
                untuk hadir di hari pernikahan kami
            </div>
            <div style="height: 10px;"></div>
            <div align="center" style="height:300px;" id="gb">
                <br>
                <div style="height: calc(100% - 30px); overflow:scroll;">
                    <div align="center" style="font-family: minion;">
                        <br>
                        <?php
                        $qu = "SELECT * FROM " . $tabledb . "1 ORDER BY tgl DESC,id DESC";
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
                            <font class="fo5" style="font-family: aboretoi;">Buku tamu masih kosong.<br>Jadilah orang pertama yang mengisi!</font>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <br>
            </div>

            <div class="w3-medium" style="background:url(material/box1.png); background-size:100%; background-repeat: no-repeat;" align="center" width="100%" id="rsvp">
                <div style="height: 200px;"></div>
                <div data-aos="flip-left"
                    data-aos-easing="ease-out-cubic"
                    data-aos-duration="2000">
                    <div style="font-family:greatvibes; line-height:32px; letter-spacing:2px;" class="w3-xxlarge fo5">
                        Wedding Gift
                    </div>
                </div>
                <br>
                <div data-aos="fade-up" style="font-family:minion;" class="w3-small fo5">
                    Doa restu Anda bagi pernikahan kami<br>
                    adalah lebih dari cukup.<br>
                    Namun tanpa mengurangi rasa hormat, bagi Anda<br>
                    yang ingin memberikan tanda kasih untuk<br>
                    kami, dapat melalui amplop digital berikut:
                </div>
                <div style="height: 30px;"></div>
                <div data-aos="fade-up" style="font-family:minion;" class="fo5">
                    <font class="w3-large">BANK BCA</font><br>
                    2908200298 an Maouren Angel Suwandi<br>
                    8460125333 an Jacky Djiwono Jie
                </div>
                <div style="height: 190px;"></div>
            </div>

            <img src="material/bg6.png" style="width: 100%;">
            <div style="font-style: italic; font-family:minion; margin-top:-30px;" data-aos="slide-left">
                Sampai jumpa di hari bahagia kami!
            </div>
            <div style="height: 150px;"></div>
            <div style="font-family:arolse;" class="w3-xlarge fo5" data-aos="fade">
                made with love by<br>
                <img src="../.images/logolovebirdsdark2.png" style="width: 120px;">
            </div>
            <div style="height: 150px;"></div>
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

        <script>
            let progress = 0;
            const progressBar = document.getElementById('progressBar');
            const loadingScreen = document.getElementById('loadingScreen');
            const websiteContent = document.getElementById('websiteContent');

            const loadingInterval = setInterval(() => {
                progress += Math.random() * 10;
                if (progress >= 100) {
                    progress = 100;
                    clearInterval(loadingInterval);

                    loadingScreen.style.opacity = '0';
                    setTimeout(() => {
                        loadingScreen.style.display = 'none';
                        websiteContent.style.display = 'block';
                    }, 500);
                }
                progressBar.style.width = `${progress}%`;
            }, 300);
        </script>
    </div>
</body>

</html>
