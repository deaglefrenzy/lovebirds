<?php
$artist = "Adera";
$songTitle = "MUARA";
?>
<div align="center" class="w3-small">
    <div style="height: 20px;"></div>
    <table width="70%" align="center" border="0">
        <tr valign="middle">
            <td align="right">
                <div style="display: flex; align-items: right;" data-aos="slide-right" data-aos-easing="ease-out-back">
                    <button id="playBtn" class="bg4" style="border-radius: 100px;">
                        <i class="fa-solid fa-circle-play"></i>
                    </button>
                    <button id="pauseBtn" class="bg4" style="border-radius: 100px; display: none;">
                        <i class="fa-solid fa-circle-pause"></i>
                    </button>
                    <audio id="audioID" loop style="display: none;">
                        <source src="material/song.mp3" type="audio/mpeg">
                    </audio>
                </div>
            </td>
            <td align="left" class="fo4">
                <div data-aos="slide-right" data-aos-easing="ease-out-back">
                    <?= $artist ?><br><i class="fa-solid fa-music"> <?= $songTitle ?></i>
                </div>
            </td>
        </tr>
    </table>
    <div style="height: 20px;"></div>
</div>
