<?php
$folder = "milliantomeike";
?>
<!DOCTYPE html>
<html>
<title>DATA RSVP</title>

<head>
  <link rel="apple-touch-icon" sizes="57x57" href="../favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="../favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="../favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="../favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="../favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="../favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="../favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="../favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="../favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="../favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
  <link rel="manifest" href="../favicon/manifest.json">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="../favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  <style>
    @font-face {
      font-family: Cinzel;
      src: url('../fonts/Cinzel-Regular_1.otf');
    }

    @font-face {
      font-family: CinzelBold;
      src: url('../fonts/Cinzel-Bold_1.otf');
    }

    @font-face {
      font-family: Foglihten;
      src: url('../fonts/FoglihtenPCS-068_1.otf');
    }

    @font-face {
      font-family: Futura;
      src: url('../fonts/Futura Book font_0.ttf');
    }

    @font-face {
      font-family: Trajan;
      src: url('../fonts/TrajanPro-Regular.otf');
    }

    @font-face {
      font-family: TrajanBold;
      src: url('../fonts/TrajanPro-Bold.otf');
    }

    @font-face {
      font-family: Devanagari;
      src: url('../fonts/AdobeDevanagari-Regular.otf');
    }

    @font-face {
      font-family: Aisyah;
      src: url('../fonts/Aisyah-Demo.otf');
    }

    @font-face {
      font-family: GillSans;
      src: url('../fonts/Gill Sans Light_1.otf');
    }

    @font-face {
      font-family: Bodoni;
      src: url('../fonts/tt0035m_.ttf');
    }

    @font-face {
      font-family: Florilane;
      src: url('../fonts/Florilane Cardillac.ttf');
    }

    @font-face {
      font-family: Trebuchetbi;
      src: url('../fonts/trebucbi.ttf');
    }

    @font-face {
      font-family: Trebuchetit;
      src: url('../fonts/trebucit.ttf');
    }

    @font-face {
      font-family: Trebuchet;
      src: url('../fonts/trebuc.ttf');
    }

    @font-face {
      font-family: Trebuchetbd;
      src: url('../fonts/trebucbd.ttf');
    }

    @font-face {
      font-family: Stardust;
      src: url('../fonts/STARDUST ADVENTURE_0.TTF');
    }

    body,
    h1,
    h2 {
      font-family: "Bebas Neue", sans-serif
    }

    body,
    html {
      height: 100%
    }

    p {
      line-height: 2
    }

    .bgimg,
    .bgimg2 {
      min-height: 100%;
      background-position: center;
      background-size: cover;
    }

    button {
      padding: 0.5em 2em;
      border: 1px #633A11 solid;
      border-radius: 5px;
      background: #633A11;
      color: #FFFAF0;
      border-radius: 15px;
      cursor: pointer;
    }

    button:hover {
      background: #FFFAF0;
      border: 1px #633A11 solid;
      color: #633A11;
      cursor: hand;
    }

    .bgpeach {
      background: #FFC2C4;
    }

    .bgcream {
      background: #FFFAF0;
    }

    .bgpeach2 {
      background: #E68C78;
    }

    .bgpeach3 {
      background: #f9cab8;
    }

    .fontpeach {
      color: #E68C78;
    }

    .fontgold {
      color: #D19E26;
    }

    .fontabu {
      color: #191919;
    }

    .fontcoklat {
      color: #633A11;
    }

    .fontwhite {
      color: #ffffff;
    }
  </style>
</head>

<body class="bgpeach3">
  <br>
  <?php
  include('../function.php');
  ?>
  <h1 align="center" style="font-family:Trajan;" class="fontcoklat">DATA RSVP</h1>
  <table width="100%" style="background:#fff;">
    <tr>
      <td>
        <br>
        <div class="w3-container w3-center">
          <?php
          $query = "SELECT * FROM " . $folder . "2 ORDER BY nama DESC";
          $q = mysqli_query($conn, $query);
          while ($qq = mysqli_fetch_array($q)) {
            if ($qq['guest'] == 0) $gu = "Tidak hadir";
            else $gu = $qq['guest'] . " Tamu";
          ?>
            <div class="w3-content w3-center">
              <table class="bgcream" style="border-radius: 10px;" width="100%" align="center" cellpadding="10">
                <tr>
                  <td align="left">
                    <font class="w3-large fontcoklat" style="font-family:Bodoni;">
                      <i class="fa-solid fa-user-large"></i> <?php echo $qq['nama']; ?> : <?php echo $gu; ?> orang<br />
                      <i class="fa-brands fa-whatsapp"></i> <?php echo $qq['whatsapp']; ?><br>
                      <i class="fa-solid fa-venus-mars"></i> Pihak <?php echo $qq['pihak']; ?>
                    </font>
                  </td>
                </tr>
              </table>
              <br>
            </div>
          <?php
          }
          ?>
        </div>
      </td>
    </tr>
  </table>
</body>
