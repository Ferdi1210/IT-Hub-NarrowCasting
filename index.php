<?php
    require("config.php");
    require("functions.php");

    session_start();
    
    if(!defined('ROOTURL'))
    {
        define('ROOTURL' , 'http://schoolwerk.nl/IT-Hub-NarrowCasting!/index.php'); 
    }
    if(!isset($_GET['module']))
    {
        $_GET['module'] = 'login';
    }

$sHtml = '';

if(!empty($_GET['module']))
{
    $sPath = __DIR__ . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . $_GET['module'] . DIRECTORY_SEPARATOR . 'index.php';
  
    // $sNavibar = include('navibar.php');

    if(file_exists($sPath))
    {
        $sHtml .= include($sPath);
    }
    else
    {
        $sHtml .= 'error, no module found!';
    }
}
else
{
    $sHtml .='error, no module found!';
}
    echo $sHtml;
?>

<!DOCTYPE html>
<html lang="en">

<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>It-Hub</title>
    <link href="styles.css" rel="stylesheet">
</head>

    <body>  
        <div class="inhoud"></div>
    
        <div class="website">
        <div class="grid">
            <div>
                <a href="bekijk-afspraak.php"><img class="bekijk-afspraak" src="img/afbeelding-afspraak-bekijken-met-tekst.png"></a>
            </div>

            <div>
                <a href="reserveer-werkplek.php"><img class="reserveer-werkplek" src="img/afbeelding-reservering-maken-met-tekst.png"></a>
            </div>
        </div>
        <div>
            <a href="index.php"><img class="image-logo" src="img/ithub-verticaal.png"></a>
        </div>
    </div>

    <div class="frontpage">
        <img id="frontpage" src="img/Designs  narrowcasting_Welkomstscherm.png" onclick="moveImage()" style="width: 1920px;;height:auto;"> 
    </div>

</body>
</html>

<script>
    function moveImage() {
      var image = document.getElementById("frontpage");
      image.style.position = "absolute";
      image.style.bottom = "2200px";
    
      setTimeout(function() {
        image.style.position = "static";
      }, 2000); //(60,000 milliseconds) 1 minuut
    }
</script>