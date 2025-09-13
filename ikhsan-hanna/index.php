<?php include("profile.php"); ?>
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

<body class="fo3 bg2">
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
            <?php include("partials/envelope.php"); ?>
        </div>

        <div id="invitation-content" class="fo2 bg2">
            <?php include("partials/header.php"); ?>
            <?php include("partials/music.php"); ?>
            <div align=left>
                <img src="material/flower4.png" style="width: 200px; height:550px; object-fit: cover; object-position: 0 0; z-index:-1; position:relative;">
            </div>
            <div style="margin-top: -500px;">
                <?php include("partials/names.php"); ?>
            </div>
            <div align=right>
                <img src="material/flower1.png" style="width: 250px; height:350px; object-fit: cover; object-position: 100px 0; z-index:-1; position:relative; margin-top:-500px;">
            </div>
            <?php include("partials/location.php"); ?>
            <div align=right>
                <img src="material/flower3.png" style="width: 250px; height:350px; object-fit: cover; object-position: 100px 0; z-index:-1; position:relative; margin-top:-300px;">
            </div>
            <?php include("partials/countdown.php"); ?>
            <div style="background:url(material/bg1.png); background-size:100%;">
                <div style="height: 50px;"></div>
                <div align=left>
                    <img src="material/flower6.png" style="width: 150px; height:190px; object-fit: cover; object-position: 0px 0; position:relative;">
                </div>
                <?php include("partials/rsvp.php"); ?>
                <div align=right>
                    <img src="material/flower7.png" style="width: 150px; height:210px; object-fit: cover; object-position: 0px 0; position:relative; margin-top:-250px;">
                </div>
            </div>
            <div style="width: 100%; background: #1b346c; margin-top: -63px;">
                <div style="height: 30px;"></div>
                <div style="background:url(material/bg3.png); background-size:100%;">
                    <div style="height: 50px;"></div>
                    <div style="font-family:minion;" data-aos="fade">
                        Sampai jumpa di hari bahagia kami!
                    </div>
                    <div style="height: 30px;"></div>
                    <div class="w3-xxlarge fo4" data-aos="fade" style="font-family:cinzel;">
                        IKHSAN & HANNA
                    </div>
                    <div style="height: 50px;"></div>
                    <?php include("partials/footer.php"); ?>
                    <div style="height: 50px;"></div>
                </div>
            </div>
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
