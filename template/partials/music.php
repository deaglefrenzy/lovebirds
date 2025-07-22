<?php
$artist = "Mateo Oxley feat. Beth";
$songTitle = "Come What May";
?>

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
                <?= $artist ?><br><i class="fa-solid fa-music"> <?= $songTitle ?></i>
            </td>
        </tr>
    </table>
</div>
