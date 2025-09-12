<?php
if ($useEnglish) {
    $rsvpQuote = "Help us prepare the best to host you<br>
                on our wedding day by filling out<br>
                the information below.";
    $rsvpNotAttending = "Not Attending";
    $rsvpGuest = "guest";
    $rsvpGuests = "guests";
    $rsvpGroom = "Groom's Side";
    $rsvpBride = "Bride's Side";
    $rsvpSend = "Send";
} else {
    $rsvpQuote = "Bantu kami mempersiapkan jamuan yang<br>
                hangat untuk Anda semua dengan mengirimkan<br>
                konfirmasi kehadiran melalui form berikut ini:";
    $rsvpNotAttending = "Tidak Hadir";
    $rsvpGuest = "tamu";
    $rsvpGuests = "tamu";
    $rsvpGroom = "Pihak Mempelai Pria";
    $rsvpBride = "Pihak Mempelai Wanita";
    $rsvpSend = "Kirim";
}
$useWhatsApp = false;
?>
<table class="w3-medium" style="margin-top:-120px; background:url(material/box1.png); background-size:100%; background-repeat: no-repeat;" align="center" width="90%" id="rsvp">
    <tr>
        <td align="center">
            <div style="height: 150px;"></div>
            <div data-aos="fade">
                <img src="material/flower5.png" style="width:30%;">
            </div>
            <div style="height: 10px;"></div>
            <div data-aos="fade-up"
                data-aos-anchor-placement="top-bottom">
                <font class="w3-xxlarge fo2" style="font-family: edwardian;">R S V P</font>
            </div>
            <div style="height: 10px;"></div>
            <div data-aos="fade-up" style="font-family: minioni; line-height:25px;" class="w3-small fo2">
                <?= $rsvpQuote ?>
            </div>
            <div style="height: 20px;"></div>
            <div data-aos="fade-up">
                <form action="#myForm1" method="post" onsubmit="return confirm('<?= $rsvpSend ?> RSVP?');" id="myForm1">
                    <table align="center" style="font-family:minion;" width="60%">
                        <tr>
                            <td>
                                <input class="w3-small fo1 bg2" type="text" name="nama" value="<?php echo $to; ?>" style="width:100%; border-radius:10px; height:30px; border-color:white;" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <select class="w3-small fo1 bg2" style="width:100%; border-radius:10px; height:30px; border-color:white;" name="guest">
                                    <option value="0"><?= $rsvpNotAttending ?></option>
                                    <option value="1" <?php if ($guest == 1) echo "selected"; ?>>1 <?= $rsvpGuest ?></option>
                                    <option value="2" <?php if ($guest == 2) echo "selected";
                                                        if ($guest < 2) echo "disabled"; ?>>2 <?= $rsvpGuests ?></option>
                                    <option value="3" <?php if ($guest == 3) echo "selected";
                                                        if ($guest < 3) echo "disabled"; ?>>3 <?= $rsvpGuests ?></option>
                                    <option value="4" <?php if ($guest == 4) echo "selected";
                                                        if ($guest < 4) echo "disabled"; ?>>4 <?= $rsvpGuests ?></option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                if ($useWhatsApp) {
                                ?>
                                    <input class="w3-small" type="text" name="whatsapp" style="width:100%; border-radius:10px; height:30px; border-color:gold;" placeholder="WhatsApp">
                                <?php
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button class="bg2 fo1" type="submit" style="border-radius:5px; font-family:minion; width:100%; border-color:white;" value="rsvp" name="action"><?= $rsvpSend ?></button>
                            </td>
                        </tr>
                    </table>
            </div>
            </form>
            </div>
            <div style="height: 250px;"></div>
        </td>
    </tr>
</table>
