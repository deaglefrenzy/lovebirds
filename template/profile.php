<?php
$groom = "Jacky";
$bride = "Maouren";

$warna1 = "#F7F0E6";
$warna2 = "#FCFCF2";
$warna3 = "#20130D";
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
