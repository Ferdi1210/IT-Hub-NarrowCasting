<?php














echo '



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Reserveer</title>
    <link href="styles.css" rel="stylesheet">

</head>
<body>
    <div class="website">
        <div class="grid">
           <p>Reserveer</p>
        </div>
    </div>

    <div>
        <a href="index.php"><img class="image-logo" src="img/ithub-verticaal.png"></a>
    </div>

    










</body>
</html>
';

?>
            <h1>Reserveer/selecteer jouw afspraak</h1>
            <div class="grid"> 
             <div class="contact">
                    <form method="post">
                        <input type="hidden" name="formsent" value="1">
        
                        <label for="fname"></label>
                        <input type="text" id="fname" name="voornaam" placeholder="Uw naam" required><br>
        
                        <label for="lname"></label>
                        <input type="text" id="lname" name="achternaam" placeholder="Uw achternaam" required><br>
        
                       <label for="adress"></label>
                       <input type="text" id="Straat+Huisnummer" name="straat+huisnummer" placeholder="Straat+Huisnummer"><br>
                       <input type="text" id="Stad" name="Stad" placeholder="Stad">
                       <input type="text" id="Postcode" name="Postcode" placeholder="Postcode"><br>
        
        
                        <input type="text" name="Telefoon" placeholder="Telefoonnummer" required><br>
                        
                        <input type="text" name="E-mail" placeholder="E-mail" required><br>
        
                        <input type="text" name="E-mail" placeholder="Herhaal E-mail" required><br>
        
                        <input type="submit" value="Verstuur"><br>
                    </form>
                </div>';
                <div class="image-map">
                    <img src="img/plattegrond.png" alt="img1">
                    <img src="img/plattegrond2.png" alt="img2">
                </div>
            </div>
        </div>
        <!-- <div class="table">
            <table>
                <tr>
                    <th>Organisatie</th>
                    <th>Naam</th>
                    <th>Locatie</th>
                </tr>
                <tr>
                    <td>Alfa-college</td>
                    <td>Colin Grim</td>
                    <td>Bunker</td>
                </tr>
                <tr>
                    <td>TVM</td>
                    <td>Ferdi Cumen</td>
                    <td>Kasteel</td>
                </tr>
                <tr>
                    <td>MKB fonds Drenthe</td>
                    <td>Nathan ten Brink</td>
                    <td>Fornuis</td>
                </tr>
            </table>
        </div> -->
        <div>
            <a href="index.html"><img class="image-logo" src="img/ithub-verticaal.png"></a>
        </div>

        
        
    </body>
</html>