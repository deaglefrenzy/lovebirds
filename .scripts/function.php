<?php
$col1 = "#FAD9C6";
$col2 = "#8B765B";
$col3 = "#5DA9E9";
$col4 = "#9AE19D";
$col5 = "#AF3B6E";

include_once("connection.php");

$bulan = array("", "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
$bulan2 = array("", "Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agu", "Sep", "Okt", "Nov", "Des");
$hari = array("", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu");

function tang($t)
{
	$tg = substr($t, 8, 2);
	$bl = substr($t, 5, 2);
	$th = substr($t, 0, 4);
	$bulan = array("", "Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agu", "Sep", "Okt", "Nov", "Des");
	if (substr($bl, 0, 1) == "0") $bl = substr($bl, 1, 1);
	$bln = $bulan[$bl];
	echo "$tg $bln $th";
}

function pergi($tujuan)
{
?>
	<meta http-equiv="refresh" content="0; url='<?php echo $tujuan; ?>'">
<?php
}

function pesan($isi)
{
?>
	<script language="javascript">
		alert("<?php echo $isi; ?>");
	</script>
<?php
}

function permission($stat)
{
	if (!empty($_COOKIE['idlogin'])) {
		if ($_COOKIE['priv'] <= $stat) {
			return true;
		} else {
			pesan("Anda tidak mempunyai akses ke halaman ini!");
			pergi("index.php");
			return false;
		}
	} else {
		pesan("Anda tidak mempunyai akses ke halaman ini!");
		pergi("index.php");
		return false;
	}
}

function ptrue($s)
{
	if ($_COOKIE['stat'] == $s) return true;
	else return false;
}

function pfalse($s)
{
	if (($_COOKIE['stat'] == 1) || ($_COOKIE['stat'] == $s)) return false;
	else return true;
}

function rupiah($nilai)
{
	$hasil = "Rp " . number_format($nilai, 0, ",", ".");
	return $hasil;
}

function ganti($n)
{
	$hasil = str_replace('.', '', $n);
	return $hasil;
}

function terbilang($satuan)
{
	$huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
	if ($satuan < 12) return " " . $huruf[$satuan];
	elseif ($satuan < 20) return terbilang($satuan - 10) . " belas";
	elseif ($satuan < 100) return terbilang($satuan / 10) . " puluh" . terbilang($satuan % 10);
	elseif ($satuan < 200) return " seratus" . terbilang($satuan - 100);
	elseif ($satuan < 1000) return terbilang($satuan / 100) . " ratus" . terbilang($satuan % 100);
	elseif ($satuan < 2000) return " seribu" . terbilang($satuan - 1000);
	elseif ($satuan < 1000000) return terbilang($satuan / 1000) . " ribu" . terbilang($satuan % 1000);
	elseif ($satuan < 1000000000) return terbilang($satuan / 1000000) . " juta" . terbilang($satuan % 1000000);
	elseif ($satuan < 1000000000000) return terbilang($satuan / 1000000000) . " milyar" . terbilang($satuan % 1000000000);
}


function tulistgl($tgl)
{
	$tanggal = date('d M Y', strtotime($tgl));
	return $tanggal;
}

function tulistglhari($tgl)
{
	$bulan = array("", "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
	$hari = array("", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu");
	$ha = $hari[date("N", strtotime($tgl))];
	$tg = date("d", strtotime($tgl));
	$bl = $bulan[date("n", strtotime($tgl))];
	$th = date("Y", strtotime($tgl));
	$tanggal = "$ha, $tg $bl $th";
	return $tanggal;
}

function hidden($name, $value)
{
	$var = "<input type='hidden' name='" . $name . "' value='" . $value . "'>";
	return $var;
}

function statt($no)
{
	if ($no == 0) return "<i class='fa fa-hourglass'></i> <b>Permintaan</b>";
	else if ($no == 1) return "<i class='fa fa-thumbs-up'></i> <b>Disetujui</b>";
	else if ($no == 2) return "<i class='fa fa-dollar-sign'></i> <b>Terbayar</b>";
}

function statkb($no)
{
	if ($no == 0) return "<i class='fa fa-file-invoice-dollar'></i> <b>Hutang</b>";
	else if ($no == 1) return "<i class='fa fa-clipboard-check'></i> <b>Lunas</b>";
}

function disable($s)
{
	if ($s != 1) return "disabled";
}

$namasat = array("bh", "dos", "bks", "bal", "krg", "btl", "lsn", "sst", "klg");

$jummetode = 5;
function namametode($no)
{
	switch ($no) {
		case "1":
			return "Tunai";
			break;
		case "2":
			return "Transfer";
			break;
		case "3":
			return "Debit";
			break;
		case "4":
			return "Kredit";
			break;
		case "5":
			return "BG";
			break;
	}
}
?>
