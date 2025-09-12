<?php
$groom = "Ikhsan";
$bride = "Hanna";

$warna1 = "#001997";
$warna2 = "#FFFCF5";
$warna3 = "#191919";
$warna4 = "#B6910C";
$warna5 = "#633A11";

$useQR = false;
$useEnglish = false;

if ($useEnglish) {
    $judul = $groom . " & " . $bride . "'s Wedding";
} else {
    $judul = "Pernikahan " . $groom . " & " . $bride;
}

$lowgroom = strtolower($groom);
$lowbride = strtolower($bride);
$folder = $lowgroom . "-" . $lowbride;
$tabledb = $lowgroom . $lowbride;
