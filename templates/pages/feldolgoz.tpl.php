<?php
if(isset($_POST['nev']) && isset($_POST['email']) && isset($_POST['szoveg'])) {
    $datenow=date("Y-m-d");
    $timenow=date("H:i:s");

    if((strlen($_POST['nev'])) < 5)
        $name="Hibás!";
    else
        $name="Helyes";

    $re = '/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/';
    if(!preg_match($re,$_POST['email']))
        $mail="Hibás!";
    else
        $mail="Helyes";

    if(strlen(($_POST['szoveg'])) < 1 )
        $szoveg="Hibás!";
    else
        $szoveg="Helyes";

    if($name=="Helyes" && $mail=="Helyes" && $szoveg=="Helyes") {
    try {
        $dbh = new PDO('mysql:host=localhost;dbname=noe', 'root', '',
            array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');

        $sqlInsert = "insert into uzenetek(id, nev, email, szoveg, datum, ido)
            values(0, :nev, :email, :szoveg, :datum, :ido)";
        $stmt = $dbh->prepare($sqlInsert);
        $stmt->execute(array(':nev' => $_POST['nev'], ':email' => $_POST['email'],
            ':szoveg' => $_POST['szoveg'], ':datum' => $datenow, ':ido' => $timenow));
        if($count = $stmt->rowCount()) {
                $newid = $dbh->lastInsertId();
                $uzenet = "Üzenet sikeresen elküldve.<br>Azonosítója: {$newid}";
                $ujra = false;
            }
            else {
                $uzenet = "Üzenet elküldése sikertelen!";
                $ujra = true;
            }
        }
    catch (PDOException $e) {
        echo "Hiba: ".$e->getMessage();
    }
    }
    }
    else {    
        $ujra=true;
        $uzenet="Nem töltött ki a kapcsolatok menüpontnél üzenetet számunkra!";
    }

?>

    <?php if(isset($_POST['nev']) && isset($_POST['email']) && isset($_POST['szoveg'])) { ?>
        <table>
            <tr>
                <td>Név: <?= $_POST['nev']."   "?></td>
                <td><?= $name?><br></td>
            </tr>
            <tr>
                <td>E-mail: <?= $_POST['email']."   "?></td>
                <td><?= $mail?><br></td>
            </tr>
            <tr>
                <td>Szöveg: <?= $_POST['szoveg']."   "?></td>
                <td><?= $szoveg?><br></td>
            </tr>
            <tr>
                <td>Datum: <?= $datenow ?></td>
            </tr>
            <tr>
                <td>Idő: <?= $timenow ?></td>
            </tr>
        </table>
        <?php } ?>
        <?php if(isset($uzenet)) { ?>
        <h1><?= $uzenet ?></h1>
        <?php if($ujra) { ?>
            <a href="./index.php">Új üzenet küldéshez!</a>
        <?php } ?>
    <?php } ?>