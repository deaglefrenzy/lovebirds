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
</head>

<?php
include("../.scripts/function.php");
include("../.scripts/handlers.php");
?>

<body class="fo4 bg1">
    <div id="envelope">
        <?php include("envelope.php"); ?>
    </div>

    <div id="invitation-content" class="fo4 bg1">
        <div style="background:url(material/bg1.png); background-size:100%; background-repeat: no-repeat;">
            <div class="w3-center fo2" style="font-family: minion;">
                <div style="height: 550px;"></div>
                <font style="font-family: minioni;">The <font style="font-family: minion; letter-spacing:2px;">WEDDING</font> of</font>
                <br>
                <div style="font-family:claytona; line-height:30px;" class="w3-xxxlarge">
                    <font style="margin-right:95px;">Andriyono</font>
                    <br>
                    <font style="margin-left:95px;">
                        <font class="w3-xxlarge">&</font>Stevani
                    </font>
                </div>
                <br>
                20 JUNE 2025
                <div style="height: 50px;"></div>
            </div>
        </div>
        <br><br><br>
        <div align="center" class="w3-small" data-aos="fade-up" data-aos-easing="ease-out-back">
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
                        NIKI<br><i class="fa-solid fa-music"> You'll be in My Heart</i>
                    </td>
                </tr>
            </table>
        </div>

        <div align=right>
            <img src="material/flower1.png" style="width: 200px; height:250px; object-fit: cover; object-position: 0 0; margin-top:-150px; z-index:-1; position:relative;">
        </div>

        <br><br>
        <div align="center" class="w3-small" data-aos="fade-up" data-aos-easing="ease-out-back" style="margin-top:-150px;">
            <table width="100%" style="background:url(material/box1.png); background-size:100%; background-repeat:no-repeat;">
                <tr>
                    <td style="font-family: trajan;" align="center" class="w3-tiny">
                        <br><br><br><br><br><br><br>
                        <img src="material/bg2.png" style="width: 45%;">
                        <br><br><br>
                        AND THE GOOD LORD SAID :<br>
                        " IT IS NOT GOOD <br>
                        THAT MAN SHOULD BE ALONE;<br>
                        I WILL MAKE HIM<br>
                        A HELPER COMPARABLE TO HIM."<br><br>
                        THEREFORE A MAN<br>
                        SHALL LEAVE HIS FATHER AND MOTHER<br>
                        AND BE JOINED TO HIS WIFE,<br>
                        AND THEY SHALL<br>
                        BECOME ONE FLESH.<br><br>
                        <font style="font-family: claytona;" class="w3-xlarge">Genesis 2 : 18, 24</font>
                        <br><br><br><br>
                    </td>
                </tr>
            </table>
        </div>

        <div align=left>
            <img src="material/flower2.png" style="width: 160px; height:320px; object-fit: cover; object-position: 100% 0; margin-top:-110px; z-index:-1; position:relative;">
        </div>

        <br><br>
        <div style="margin-top:-100px; line-height:60px;">
            <div data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                <div style="font-family: aston; margin-left:20px;" class="w3-xxlarge fo5" align=left>
                    the Groom
                </div>
                <div style="font-family: blacksword;" class="w3-xxlarge" align=center>
                    Andriyono Lisan
                </div>
                <div style="font-family: bodoni; font-style:italic; line-height:15px;" class="w3-small fo5" align=center>
                    The eldest son of<br>
                    Mr. Feriyanto Lisan & Mrs. Yuli Tjoanto
                </div>
            </div>
        </div>
        <img src="material/bg3.png" style="width: 95%;">
        <div style="line-height:60px;">
            <div data-aos="flip-right" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                <div style="font-family: aston; margin-right:20px;" class="w3-xxlarge fo5" align=right>
                    the Bride
                </div>
                <div style="font-family: blacksword;" class="w3-xxlarge" align=center>
                    Stevani Phoander
                </div>
                <div style="font-family: bodoni; font-style:italic; line-height:15px;" class="w3-small fo5" align=center>
                    The only daughter of<br>
                    Mr. Felix Phoander & Mrs. Indra Chandra
                </div>
            </div>
        </div>
        <div align=right>
            <img src="material/flower3.png" style="width: 150px; height:200px; object-fit: cover; object-position: 0 0; margin-top:-50px; z-index:-1; position:relative;">
        </div>

        <div style="background:url(material/bg4.png); background-size:100%; background-repeat:no-repeat; margin-top:-150px;">
            <table width="90%" align="center" style="font-family:minion;" class="fo2">
                <tr>
                    <td align="center">
                        <div style="height: 125px;"></div>
                        <div data-aos="zoom-in-up">
                            <img src="../.images/shuangxi1.png" style="width: 15%;">
                        </div>
                        <br>
                        <div data-aos="fade-up" class="w3-small">
                            By the grace and blessings of the Lord,<br>
                            we cordially invite you
                        </div>
                        <br>
                        <div data-aos="fade-up" style="letter-spacing: 2px;">
                            FRIDAY, JUNE 20<sup>TH</sup> 2025
                        </div>
                        <br>
                        <div data-aos="fade-up" style="font-family: minioni;" style="letter-spacing: 2px;">
                            Sacrement of Marriage<br>
                            <img src="../.images/church.png" style="width: 15%;">
                        </div>
                        <div data-aos="fade-up" class="w3-small" style="letter-spacing: 2px;">
                            GEREJA KATOLIK KRISTUS RAJA<br>
                            <font style="font-family:minioni;">Jl. Andalas No. 61, Makassar</font><br>
                            At 12.30 PM
                        </div>
                        <div data-aos="fade-up">
                            <a href="https://maps.app.goo.gl/mq9bg4wZkqLx86Li9" target="_blank">
                                <img src="material/location.png" style="width: 35%; cursor: pointer;">
                            </a>
                        </div>
                        <div style="height: 20px;"></div>
                        <div data-aos="fade-up" style="font-family: minioni;" style="letter-spacing: 2px;">
                            Wedding Reception<br>
                            <img src="../.images/reception.png" style="width: 15%;">
                        </div>
                        <div data-aos="fade-up" class="w3-small" style="letter-spacing: 2px;">
                            THE UPPERHILLS CONVENTION HALL<br>
                            <font style="font-family:minioni;">Jl. Metro Tanjung Bunga No. 995<br>Makassar</font><br>
                            At 18.30 PM
                        </div>
                        <div data-aos="fade-up">
                            <a href="https://maps.app.goo.gl/cTrNWN9jgyRjpYvg7" target="_blank">
                                <img src="material/location.png" style="width: 35%; cursor: pointer;">
                            </a>
                        </div>
                        <br>
                        <div data-aos="fade-up" class="w3-small">
                            Dresscode<br>
                            <font class="w3-tiny">
                                We kindly request that guests wear long dresses (for women) and<br>
                                formal attire (for men). Please avoid pastel and bright colors.
                            </font>
                        </div>
                    </td>
                </tr>
            </table>
            <br>
        </div>
        <div style="background:url(material/bgcountdown.png); background-size:100%; background-repeat: no-repeat;">
            <div class="w3-center">
                <table width="100%" align="center">
                    <tr>
                        <td align="center" class="fo2">
                            <div style="height: 560px;"></div>
                            <div data-aos="slide-right">
                                <font class="w3-large fo2" style="font-family:cinzel;">
                                    <b>
                                        <!-- MENUJU HARI H -->
                                        COUNTING DOWN TO THE BIG DAY
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

                                Day(s) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                Hour(s) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                Minute(s) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                Second(s)

                                <!-- HARI &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                JAM &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                MENIT &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                DETIK -->
                            </div>
                            <div style="height: 100px;"></div>
                            <script>
                                // Set the date we're counting down to
                                var countDownDate = new Date("June 20, 2025 12:30:00").getTime();

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
            <img src="material/flower2.png" style="width: 160px; height:320px; object-fit: cover; object-position: 100% 0; margin-top:-200px; z-index:-1; position:relative;">
        </div>

        <table class="w3-medium" style="margin-bottom:-130px; margin-top:-150px; background:url(material/box1.png); background-size:100%; background-repeat: no-repeat; font-family:bodoni;" align="center" width="100%" id="rsvp">
            <tr>
                <td align="center">
                    <div style="height: 100px;"></div>
                    <div data-aos="fade-up"
                        data-aos-anchor-placement="top-bottom">
                        <font class="w3-xxlarge fo4" style="font-family: trajan;">R S V P</font>
                    </div>
                    <div style="height: 20px;"></div>
                    <div data-aos="fade-up" style="font-family: bodoni;" class="w3-small fo5">
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
                                <input class="w3-small" type="text" name="nama" value="<?php echo $to; ?>" style="width:50%; border-radius:10px; height:30px; border-color:gold;">
                                <br>
                                <select class="w3-small" style="width:50%; border-radius:10px; height:30px; border-color:gold;" name="guest">
                                    <option value="0">Not attending</option>
                                    <option value="1" <?php if ($guest == 1) echo "selected"; ?>>1 guest</option>
                                    <option value="2" <?php if ($guest == 2) echo "selected";
                                                        if ($guest < 2) echo "disabled"; ?>>2 guests</option>
                                    <option value="3" <?php if ($guest == 3) echo "selected";
                                                        if ($guest < 3) echo "disabled"; ?>>3 guests</option>
                                    <option value="4" <?php if ($guest == 4) echo "selected";
                                                        if ($guest < 4) echo "disabled"; ?>>4 guests</option>
                                </select>

                                <select class="w3-small" name="pihak" style="border-radius:10px; width:50%; height:30px; border-color:gold;">
                                    <option value="Pria">Groom's side</option>
                                    <option value="Wanita">Bride's side</option>
                                </select>
                                <br>
                                <input class="w3-small" type="text" name="whatsapp" style="width:50%; border-radius:10px; height:30px; border-color:gold;" placeholder="WhatsApp">
                                <button type="submit" name="action" value="rsvp" class="bg5 w3-text-white" style="width: 50%; border-color:gold;">Send</button>
                            </div>
                        </form>
                    </div>
                    <div style="height: 200px;"></div>
                </td>
            </tr>
        </table>

        <div align=right>
            <img src="material/flower3.png" style="width: 150px; height:200px; object-fit: cover; object-position: 0 0; z-index:-1; position:relative;">
        </div>

        <img src="material/bg5.png" style="width: 100%;">

        <div align=right>
            <img src="material/flower1.png" style="width: 200px; height:250px; object-fit: cover; object-position: 0 0; z-index:-1; position:relative; margin-top:-50px;">
        </div>

        <div style="font-family:aston; line-height:50px; margin-top:-50px;" class="w3-xxlarge fo5">
            <font style="margin-right:100px;">Photo</font>
            <br>
            <font style="margin-left:100px;">Gallery</font>
        </div>
        <br><br>
        <div data-aos="fade-up">
            <img src="material/gallery1.png" style="width: 75%;">
        </div>
        <br><br>
        <div data-aos="fade-up">
            <img src="material/gallery2.png" style="width: 75%;">
        </div>
        <br><br>
        <div data-aos="fade-up">
            <img src="material/gallery3.png" style="width: 75%;">
        </div>
        <br><br>
        <div data-aos="fade-up">
            <img src="material/gallery4.png" style="width: 75%;">
        </div>
        <br><br>
        <div data-aos="fade-up">
            <img src="material/gallery5.png" style="width: 75%;">
        </div>
        <br><br>
        <div data-aos="fade-up">
            <img src="material/gallery6.png" style="width: 75%;">
        </div>
        <br><br>
        <div data-aos="fade-up">
            <img src="material/gallery7.png" style="width: 75%;">
        </div>
        <br><br>
        <div data-aos="fade-up">
            <img src="material/gallery8.png" style="width: 75%;">
        </div>
        <br><br>
        <div data-aos="fade-up">
            <img src="material/gallery9.png" style="width: 75%;">
        </div>
        <div align=right>
            <img src="material/flower1.png" style="width: 200px; height:250px; object-fit: cover; object-position: 0 0; z-index:-1; position:relative; margin-top:-50px;">
        </div>
        <br><br>

        <div style="background:url(material/box2.png); background-size:100%; background-repeat:no-repeat; margin-top:-100px;">
            <div style="height: 125px;"></div>
            <div data-aos="flip-left"
                data-aos-easing="ease-out-cubic"
                data-aos-duration="2000">
                <div style="font-family:aston; line-height:40px;" class="w3-xlarge fo5">
                    Write your<br>
                    Prayers and Wishes
                </div>
            </div>
            <br>
            <form action="#myform2" method="post" onSubmit="return confirm('Send this message?');" id="myForm2">
                <input type="hidden" name="action" value="gb">
                <div data-aos="fade-up">
                    <table align="center" style="font-family:minion;" width="60%">
                        <tr>
                            <td><input class="w3-small" name="nama" type="text" style="font-family:minion; border:1; border-radius:5px; width:100%; border-color:gold;" placeholder="Name"></td>
                        </tr>
                        <tr>
                            <td>
                                <textarea placeholder="Prayers & wishes for Andriyono & Stevani" class="w3-small" name="ucapan" style="font-family:minion; border:1; border-radius:5px; width:100%; border-color:gold;" rows="3"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                                <button class="bg5 w3-text-white" type="submit" style="border-radius:5px; font-family:minion; width:100%; border-color:gold;">Send</button>
                            </td>
                        </tr>
                    </table>
                </div>
            </form>
            <div style="height: 125px;"></div>
        </div>
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
                        <font class="fo5" style="font-family: aboretoi;">Guest book is empty.<br>Be the first to fill it out!</font>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <br>
        </div>
        <div style="background:url(material/bg6.png); background-size:100%; background-repeat: no-repeat;">
            <div class="w3-center fo3">
                <div style="height: 750px;"></div>
                <div style="font-family:claytona; line-height:30px;" class="w3-xxxlarge">
                    <font style="margin-right:95px;">Andriyono</font>
                    <br>
                    <font style="margin-left:95px;">
                        <font class="w3-xxlarge">&</font>Stevani
                    </font>
                </div>
                <i>See you on our wedding day!</i>
                <div style="height: 50px;"></div>
            </div>
        </div>
        <div style="height: 40px;"></div>
        <font class="fo5">Made with love by</font><br>
        <img src="../.images/logolovebirdsdark2.png" style="width: 30%;">
        <div style="height: 40px;"></div>
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
