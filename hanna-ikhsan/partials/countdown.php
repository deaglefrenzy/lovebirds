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

<div style="background:url(material/bg2.png); background-size:100%; background-repeat: no-repeat;">
    <div class="w3-center">
        <table width="100%" align="center">
            <tr>
                <td align="center" class="fo2">
                    <div style="height: 190px;"></div>
                    <div data-aos="slide-right">
                        <img src="material/logo3.png" style="width:50%; padding-bottom:20px;">
                    </div>
                    <div data-aos="slide-right">
                        <font class="fo4" style="font-family:cinzel;">
                            <b>
                                <?= $menuju ?>
                            </b>
                        </font>
                    </div>
                    <!-- Display the countdown timer in an element -->
                    <div data-aos="slide-right">
                        <b>
                            <font id="demo" style="font-family:cinzel;" class="w3-xxxlarge fo4"></font>
                        </b>
                    </div>
                    <div data-aos="slide-right" style="font-family:cinzel;" class="w3-small fo4">
                        <?= $satuan ?>
                    </div>
                    <div style="height: 300px;"></div>
                    <script>
                        // Set the date we're counting down to
                        var countDownDate = new Date("September 26, 2025 19:00:00").getTime();

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
