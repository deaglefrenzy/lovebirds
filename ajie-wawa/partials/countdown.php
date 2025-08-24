<?php
if ($useEnglish) {
    $menuju = "COUNTING DOWN TO THE BIG DAY";
    $satuan = "Day(s) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Hour(s) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Minute(s) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Second(s)";
} else {
    $menuju = "MENUJU HARI H";
    $satuan = "HARI &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                JAM &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                MENIT &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                DETIK";
}
?>

<div style="background:url(material/bgcountdown.png); background-size:100%; background-repeat: no-repeat;">
    <div class="w3-center">
        <table width="100%" align="center">
            <tr>
                <td align="center" class="fo3">
                    <div style="height: 500px;"></div>
                    <!-- Display the countdown timer in an element -->
                    <div data-aos="slide-right" style="line-height: 30px;">
                        <div style="
                        background: rgba(255, 255, 255, 0.5);
                        padding: 10px 40px;
                        border-radius: 15px;
                        text-align: center;
                        backdrop-filter: blur(10px);
                        display: inline-block;
                        ">
                            <font class="w3-large" style="font-family:cinzel;">
                                <b><?= $menuju ?></b>
                            </font>
                            <br>
                            <b>
                                <font id="demo" style="font-family:cinzel;" class="w3-xxxlarge"></font>
                            </b>
                            <div style="font-family:cinzel;" class="w3-small">
                                <?= $satuan ?>
                            </div>
                        </div>
                    </div>
                    <div style="height: 100px;"></div>
                    <script>
                        // Set the date we're counting down to
                        var countDownDate = new Date("August 31, 2025 12:00:00").getTime();

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
