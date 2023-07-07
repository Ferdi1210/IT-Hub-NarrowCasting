<?php

if(isset($_GET['page'])) {
    if($_GET['page'] == 'send'){
      otherQuery("INSERT INTO `bekijkafspraak`(`firstname`, `lastname`, `organisation`, `location`) VALUES ('".$_POST['firstname']."','".$_POST['lastname']."','".$_POST['organisation']."','".$_POST['location']."');");

      $sMessage = '<div></div>';
    }
}

echo '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bekijk Afspraak</title>
    <link href="styles.css" rel="stylesheet">
</head>

<body>
    <div class="website">
        <div class="grid">
           <p>Bekijk Afspraak</p>
        </div>
    </div>

    <div class="website">
        <h1>Selecteer/bekijk jouw afspraak</h1>
        <div class="grid"></div>  
    </div>

    <div>
        <a href="index.html"><img class="image-logo" src="img/ithub-verticaal.png"></a>
    </div>

    <div class="image-map">
        <img src="img/plattegrond.png" alt="img1">
        <img src="img/plattegrond2.png" alt="img2">
    </div>

    <div>
        <a href="index.php"><img class="image-logo" src="img/ithub-verticaal.png"></a>
    </div>
</body>
</html>';