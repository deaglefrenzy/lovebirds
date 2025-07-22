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
                <?= $rsvpQuote ?>
            </div>
            <div style="height: 30px;"></div>
            <div data-aos="fade-up">
                <form action="#myForm1" method="post" onsubmit="return confirm('<?= $rsvpSend ?> RSVP?');" id="myForm1">
                    <div style="line-height:38px;">
                        <input class="w3-small fo5" type="text" name="nama" value="<?php echo $to; ?>" style="width:50%; border-radius:10px; height:30px;" required>
                        <br>
                        <select class="w3-small" style="width:50%; border-radius:10px; height:30px; border-color:gold;" name="guest">
                            <option value="0"><?= $rsvpNotAttending ?></option>
                            <option value="1" <?php if ($guest == 1) echo "selected"; ?>>1 <?= $rsvpGuest ?></option>
                            <option value="2" <?php if ($guest == 2) echo "selected";
                                                if ($guest < 2) echo "disabled"; ?>>2 <?= $rsvpGuests ?></option>
                            <option value="3" <?php if ($guest == 3) echo "selected";
                                                if ($guest < 3) echo "disabled"; ?>>3 <?= $rsvpGuests ?></option>
                            <option value="4" <?php if ($guest == 4) echo "selected";
                                                if ($guest < 4) echo "disabled"; ?>>4 <?= $rsvpGuests ?></option>
                        </select>

                        <select class="w3-small" name="pihak" style="border-radius:10px; width:50%; height:30px; border-color:gold;">
                            <option value="Pria"><?= $rsvpGroom ?></option>
                            <option value="Wanita"><?= $rsvpBride ?></option>
                        </select>
                        <br>
                        <?php
                        if ($useWhatsApp) {
                        ?>
                            <input class="w3-small" type="text" name="whatsapp" style="width:50%; border-radius:10px; height:30px; border-color:gold;" placeholder="WhatsApp">
                        <?php
                        }
                        ?>
                        <button type="submit" name="action" value="rsvp" class="bg5 fo2" style="width: 50%;;"><?= $rsvpSend ?></button>
                    </div>
                </form>
            </div>
            <div style="height: 250px;"></div>
        </td>
    </tr>
</table>
