<h1>Feltöltés a galériába</h1>
<br>
<?php
    if (isset($_POST['kuld'])) {
     foreach($_FILES as $fajl) {
            if ($fajl['error'] == 4);
            elseif (!in_array($fajl['type'], $MEDIATIPUSOK))
                $uzenet = " Nem megfelelő típus: " . $fajl['name'];
            elseif ($fajl['error'] == 1  
                        or $fajl['error'] == 2
                        or $fajl['size'] > $MAXMERET) 
                $uzenet = " Túl nagy állomány: ".$fajl['name'];
            else {
                $vegsohely = $MAPPA.strtolower($fajl['name']);
                if (file_exists($vegsohely))
                    $uzenet = " Már létezik: ". $fajl['name'];
                else {
                    move_uploaded_file($fajl['tmp_name'], $vegsohely);
                    $uzenet = " A kép feltöltése sikeres volt: " . $fajl['name'];
                }
            }
        }
    }
?>
    <form action="?oldal=galeriafel" method="post"
                enctype="multipart/form-data">
        <label>A kép:
            <input type="file" name="kivalaszt" required value="Fájl kiválasztása">
        </label>
        <input type="submit" name="kuld" value="Feltölt">
    </form>  

<?php
    if (!empty($uzenet))
    {
        echo $uzenet."<br> \n";
    }
