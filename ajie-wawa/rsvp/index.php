<?php
$folder = @$_GET['p'];
include("../" . $folder . "/profile.php");
?>
<!DOCTYPE html>
<html>

<head>
  <title>DATA RSVP</title>
  <link rel="apple-touch-icon" sizes="180x180" href="../.favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../.favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../.favicon/favicon-16x16.png">
  <link rel="manifest" href="../.favicon/site.webmanifest">

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" href="../.scripts/fonts.css" />
  <link rel="stylesheet" href="../.scripts/styles.css" />
  <?php include("../.scripts/styles.php"); ?>
</head>

<body class="w3-brown">
  <br>
  <?php
  include('../.scripts/function.php');
  ?>
  <h1 align="center" style="font-family:trajan;" class="fo2">DATA RSVP</h1>
  <table width="100%">
    <tr>
      <td>
        <br>
        <div class="w3-container w3-center">
          <?php
          $query = "SELECT * FROM " . $tabledb . "2 ORDER BY nama DESC";
          echo $query;
          $q = mysqli_query($conn, $query);
          while ($qq = mysqli_fetch_array($q)) {
            if ($qq['guest'] == 0) $gu = "Tidak hadir";
            else $gu = $qq['guest'] . " Tamu";
          ?>
            <div class="w3-content w3-center">
              <table style="border-radius: 10px;" width="100%" align="center" cellpadding="10" class="bg2">
                <tr>
                  <td align="left">
                    <font class="w3-large fo3" style="font-family:bodoni;">
                      <i class="fa-solid fa-user-large"></i> <?php echo $qq['nama']; ?> : <?php echo $gu; ?><br />
                      <!-- <i class="fa-brands fa-whatsapp"></i> <?php echo $qq['whatsapp']; ?><br> -->
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
