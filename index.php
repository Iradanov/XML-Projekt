<?php
if(isset($_POST['naslov']) && isset($_POST['zanr']) && $_POST['godina']){
    $naslov = $_POST['naslov'];
    $zanr = $_POST['zanr'];
    $godina = $_POST['godina'];

    $file = 'filmovi.xml';
    $xml = simplexml_load_file($file);
    $film = $xml->addChild('film');
    
    $film->addChild('naslov',$naslov);
    $film->addChild('zanr',$zanr);
    $film->addChild('godina_izlaska',$godina);

    $xml->asXML($file);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Preporuke filmova</title>
</head>
<body>
    <div id="container">
        <h2>Preporučite film</h2></br>
        <form class="unos" name="filmovi" method="POST" action=""/>
            <label for="naslov">Naslov filma: </label><br>
            <input type="text" name="naslov" id="naslov" required/></br></br>
            <label for="zanr">Zanr:</label><br>
            <input type="text" name="zanr" id="zanr"required/></br></br>
            <label for="godina">Godina izlaska:</label><br>
            <input type="text" name="godina" id="godina"required/></br></br>
            <input type="submit" value="Dodaj" id="gumb"/>
        </form></br></br>
        <div class="frame">
            <iframe src="filmovi.xml" id="frame" width="600" height="400"></iframe>
        </div>
    </div>
</body>
</html>