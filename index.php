<?php
    $KEY =  "VVIncapabeleBillie";
    $KILLSWITCH = false;

    $data = openssl_decrypt(base64_decode($_GET["kamp"]), "AES-128-CBC", $KEY);
    if ($data == "" || $KILLSWITCH == true) {
        $data = "Crejaksie;nu;het einde der tijden;broekschijtertjes;SPAAAAACE";
    }
    list($vakantie, $startdatum, $einddatum, $leeftijd, $bestemming) = explode(';', $data);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>VakantieViewer</title>

    <!-- Bootstrap -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <!-- my css -->
    <link href="./css/mine.css" rel="stylesheet">

  </head>
  <body>
    <div class="container-fluid bg-kazou-bus page">
        <div class="row vakantieblok">
            <div class="container">
                <div class="row">
                    <h1>Proficiat! Jij mag mee met <i><?php echo $vakantie; ?></i>!</h1>
                    <p>
                        Zoek je medemoni's, zet je hersens aan het werk, knutsel erop los want van 
                        <i><?php echo $startdatum; ?> tot <?php echo $einddatum; ?></i> verwachten je gastjes <i>(<?php echo $leeftijd; ?>)</i>  
                        je in <i><?php echo $bestemming; ?></i>. Tot dan!
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="btn btn-danger float-top-right" onclick="closeMe();">
        <span class="glyphicon glyphicon-remove">
    </div>
    <div class="kazou-logo"><img src="./img/kazou_70_jaar.png" alt="70 jaar kazou logo." height="200px"></div>

    <!-- I don't really need any of this....
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) 
    <script src="./js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed 
    <script src="js/bootstrap.min.js"></script> -->

    <script>
        function closeMe()
        {
            window.close();
        }
    </script>
  </body>
</html>