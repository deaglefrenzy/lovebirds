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
                            Westlife<br><i class="fa-solid fa-music"> I Wanna Grow Old ith You</i>
                        </td>
                    </tr>
                </table>
            </div>
            <br><br>
            <img src="material/bg2.jpg" style="width: 80%;">
            <br><br>
            <div class="w3-center fo5 w3-small" style="font-family: bodoni; font-style:italic;">
                "For I have found
            </div>
            <table class="w3-center fo5 w3-small" style="font-family: bodoni; font-style:italic; width: 80%;" align="center">
                <tr>
                    <td>
                        <hr class="w3-border w3-border-gray" style="width: 100%; margin: 0 auto;">
                    </td>
                    <td style="width: 50%; font-size:30px; letter-spacing:2px;" class="cormorant">
                        THE ONE
                    </td>
                    <td>
                        <hr class="w3-border w3-border-gray" style="width: 100%; margin: 0 auto;">
                    </td>
                </tr>
            </table>
            <div class="w3-center fo5 w3-small" style="font-family: bodoni; font-style:italic;">
                my soul loves."
                <br><br>
                (Song of Solomon 3:4)
            </div>
            <br><br>

            <img src="material/bg3.png" style="width: 100%;">

            <br><br>
            <div data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                <div style="font-family: manstein; font-size:30px;" class="fo4" align=center>
                    Agung Thenring
                </div>
                <div style="font-family: bodoni; font-style:italic;" class="fo5 w3-tiny" align=center>
                    The youngest son of<br>Mr. Thenring Jokkie & Mrs. Siantje Jonathan
                </div>
            </div>
            <br>
            <div style="font-family: manstein; font-size:30px;" class="fo4" align=center>
                &
            </div>
            <div style="height:10px;"></div>
            <div data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                <div style="font-family: manstein; font-size:30px;" class="fo4" align=center>
                    Ivana Yosalie
                </div>
                <div style="font-family: bodoni; font-style:italic;" class="fo5 w3-tiny" align=center>
                    The youngest daughter of<br>Mr. Go Dju Liong & Mrs. Loa Siaw Phing
                </div>
            </div>

            <div style="height: 50px;"></div>
            <div style="background:url(material/bg4.jpg); background-size:100%; background-repeat:no-repeat;">
                <table width="90%" align="center" style="font-family:bodoni;" class="fo2">
                    <tr>
                        <td align="right">
                            <div style="height: 100px;"></div>
                            <!--
                            <div data-aos="fade-up" class="w3-small">
                                 By the grace and blessings of the Lord,<br>
                            we cordially invite you
                                Oleh kasih dan anugerah Tuhan, perkenankan kami<br>
                                mengundang Bapak/Ibu/Saudara(i) untuk menghadiri<br>
                                resepsi pernikahan putra - putri kami tercinta
                            </div>
                            <br>
                            -->
                            <div data-aos="fade-up" style="font-family: trajan; letter-spacing: 3px;">
                                <img src="../.images/rings.png" style="width: 20%;">
                                <div style="height: 10px;"></div>
                                HOLY MATRIMONY
                                <br>
                                <span class="w3-small">12.30 WITA</span>
                            </div>
                            <div data-aos="fade-up" class="w3-small cormorant">
                                <b>RAWALANGI CHAPEL - THE RINRA HOTEL</b><br>
                                <font style="font-family:bodoni; font-style:italic; letter-spacing: 1px;">
                                    Jl. Metro Tanjung Bunga No. 2<br>
                                    Makassar
                                </font>
                            </div>
                            <br>
                            <div data-aos="fade-up">
                                <!-- <button onClick="window.open('https://maps.app.goo.gl/BvZEfxKT8dpCYuEv7');" style="border-radius:20px;" class="w3-white"><i class="fa-solid fa-location-dot"></i>&nbsp;&nbsp;&nbsp;&nbsp;<i>Lihat Lokasi</i></button> -->
                                <a href="https://maps.app.goo.gl/dd4JJFA4f66UvmgJ9" target="_blank">
                                    <img src="material/location.png" style="width: 120px;">
                                </a>
                            </div>
                            <div style="height: 20px;"></div>
                            <div style="width:35%" align=right data-aos="fade-up">
                                <hr class="w3-border w3-border-white" style="width: 100%; margin: 0 auto;">
                            </div>
                            <div style="height: 20px;"></div>
                            <div data-aos="fade-up" style="font-family: trajan; letter-spacing: 3px;">
                                <img src="../.images/rings.png" style="width: 20%;">
                                <div style="height: 10px;"></div>
                                RECEPTION
                                <br>
                                <span class="w3-small">18.30 WITA</span>
                            </div>
                            <div data-aos="fade-up" class="w3-small cormorant">
                                <b>THE UPPERHILLS CONVENTION HALL<br>WEST HALL</b><br>
                                <font style="font-family:bodoni; font-style:italic; letter-spacing: 1px;">
                                    Jl. Metro Tanjung Bunga No. 995<br>
                                    Makassar
                                </font>
                            </div>
                            <br>
                            <div data-aos="fade-up">
                                <!-- <button onClick="window.open('https://maps.app.goo.gl/BvZEfxKT8dpCYuEv7');" style="border-radius:20px;" class="w3-white"><i class="fa-solid fa-location-dot"></i>&nbsp;&nbsp;&nbsp;&nbsp;<i>Lihat Lokasi</i></button> -->
                                <a href="https://maps.app.goo.gl/pb4g4cBqWLMMccpn8" target="_blank">
                                    <img src="material/location.png" style="width: 120px;">
                                </a>
                            </div>
                            <div style="height: 10px;"></div>
                        </td>
                    </tr>
                </table>
                <div style="height: 100px;"></div>
            </div>

            <table class="w3-medium" style="background:url(material/box1.png); background-size:100%; background-repeat: no-repeat; font-family:bodoni;" align="center" width="100%" id="rsvp">
                <tr>
                    <td align="center">
                        <div style="height: 140px;"></div>
                        <div data-aos="fade-up"
                            data-aos-anchor-placement="top-bottom">
                            <font class="w3-xxxlarge fo5" style="font-family: trajan;">R S V P</font>
                        </div>
                        <div style="height: 10px;"></div>
                        <div data-aos="fade-up" style="border-left: 2px solid <?= $warna5 ?>; height: 50px; margin-left: 50%;"></div>
                        <div style="height: 30px;"></div>
                        <div data-aos="fade-up" style="font-family: bodoni; font-style:italic;" class="w3-small fo5">
                            <i>
                                <!-- Bantu kami mempersiapkan jamuan yang<br>
                                hangat untuk Anda semua dengan mengirimkan<br>
                                konfirmasi kehadiran melalui form berikut ini: -->
                                Help us prepare the best to host you<br>
                                on our wedding day by filling out<br>
                                the information below.
                            </i>
                        </div>
                        <div style="height: 30px;"></div>
                        <div data-aos="fade-up">
                            <form action="#myForm1" method="post" onsubmit="return confirm('Send RSVP?');" id="myForm1">
                                <div style="line-height:38px;">
                                    <input class="w3-small fo5" type="text" name="nama" value="<?php echo $to; ?>" style="width:50%; border-radius:10px; height:30px;" required>
                                    <br>
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
                                    <!-- <select class="w3-small" style="width:50%; border-radius:10px; height:30px; border-color:gold;" name="guest">
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
                                    </select> -->
                                    <br>
                                    <!-- <input class="w3-small" type="text" name="whatsapp" style="width:50%; border-radius:10px; height:30px; border-color:gold;" placeholder="WhatsApp"> -->
                                    <button type="submit" name="action" value="rsvp" class="bg5 fo2" style="width: 50%;;">Submit</button>
                                </div>
                            </form>
                        </div>
                        <div style="height: 200px;"></div>
                    </td>
                </tr>
            </table>

            <div style="background:url(material/bg6.png); background-size:100%; background-repeat:no-repeat;">
                <div style="height: 80px;"></div>
                <div style="font-family: bodoni;">
                    #VANtasticlovewithAGUNG
                </div>
                <div style="height: 750px;"></div>
                <div data-aos="flip-left"
                    data-aos-easing="ease-out-cubic"
                    data-aos-duration="2000">
                    <div style="font-family:cormorant; line-height:32px; letter-spacing:2px;" class="w3-xxlarge fo5">
                        WRITE<br>
                        <span style="font-family: arolse;" class="w3-xxxlarge">your</span><br>
                        <span class="w3-xlarge">PRAYER & BLESSING</span>
                    </div>
                </div>
                <br>
                <form action="#myform2" method="post" onSubmit="return confirm('Kirimkan pesan ini?');" id="myForm2">
                    <input type="hidden" name="action" value="gb">
                    <div data-aos="fade-up">
                        <table align="center" style="font-family:minion;" width="60%">
                            <tr>
                                <td><input class="w3-small fo5" name="nama" type="text" style="font-family:minion; border:1; border-radius:5px; width:100%;;" placeholder="Name"></td>
                            </tr>
                            <tr>
                                <td>
                                    <textarea placeholder="Prayer & Blessing for Agung & Ivana" class="w3-small fo5" name="ucapan" style="font-family:minion; border:1; border-radius:5px; width:100%;" rows="3"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td align="center">
                                    <button class="bg5 fo2" type="submit" style="border-radius:5px; font-family:minion; width:100%;;">Submit</button>
                                </td>
                            </tr>
                        </table>
                    </div>
                </form>
                <div style="height: 190px;"></div>
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

            <img src="material/gallery1.jpg" style="width: 100%;">
            <div style="font-family:arolse; margin-top:-120px;" class="w3-jumbo fo2">
                Photo Gallery
            </div>
            <div style="height: 60px;"></div>
            <img src="material/gallery2.png" style="width: 100%;">
            <div style="height: 30px;"></div>
            <img src="material/gallery3.png" style="width: 90%;">
            <img src="material/bg7.jpg" style="width: 100%;">
            <img src="material/bg9.png" style="width: 100%;">
            <div style="font-family:arolse; margin-top:-150px; line-height:30px;" class="w3-xxlarge fo2">
                See you<br>
                on our wedding day!
            </div>
            <div style="height: 100px;"></div>
            <div style="font-family:arolse;" class="w3-xlarge fo5">
                made with love by<br>
                <img src="../.images/logolovebirdsdark2.png" style="width: 100px;">
            </div>
            <div style="height: 10px;"></div>
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
