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
