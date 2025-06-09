<?php
$e1 = "Isilah nama dan ucapan anda!";
$p1 = "Ucapan terkirim. Terima kasih.";
$e2 = "Mohon isi nama anda!";
$p2 = "RSVP terkirim. Terima kasih.";

$english = 1;
if ($english == 1) {
    $e1 = "Fill out your name and your message!";
    $p1 = "Message sent. Thank you.";
    $e2 = "Please fill out your name!";
    $p2 = "RSVP sent. Thank you.";
}

$action = @$_POST['action'];
if ($action == "gb") {
    $nama = $_POST['nama'];
    $ucapan = $_POST['ucapan'];
    $tgl = date("Y-m-d");
    if ((!empty($ucapan)) && (!empty($nama))) {
        $qu = "INSERT INTO " . $tabledb . "1 SET tgl='$tgl', nama='$nama', ucapan='$ucapan'";
        //echo $qu;
        mysqli_query($conn, $qu) or die(mysqli_error($conn));
        pesan($p1);
    } else pesan($e1);
}

if ($action == "rsvp") {
    $nama = $_POST['nama'];
    $guest = $_POST['guest'];
    $whatsapp = $_POST['whatsapp'];
    $pihak = $_POST['pihak'];
    if (!empty($nama)) {
        $qu = "INSERT INTO " . $tabledb . "2 SET nama='$nama', guest='$guest', whatsapp='$whatsapp', pihak='$pihak'";
        //$qu = "INSERT INTO " . $folder2 . "2 SET nama='$nama', guest='$guest', pihak='$pihak'";
        //$qu = "INSERT INTO " . $folder2 . "2 SET nama='$nama', guest='$guest'";
        mysqli_query($conn, $qu) or die(mysqli_error($conn));
        pesan($p2);
    } else pesan($e1);
}
