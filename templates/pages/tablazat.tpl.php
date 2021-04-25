<?php
try {
    $dbh = new PDO('mysql:host=localhost;dbname=noe', 'noe', 'Elendil123',
        array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
    $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');

    $sqlSelect = "SELECT datum, ido, nev, email, szoveg FROM uzenetek ORDER BY datum DESC, ido DESC";
    $sth = $dbh->prepare($sqlSelect);
    $sth->execute();
    $row = $sth->fetchAll(PDO::FETCH_ASSOC);
    print_r($row);
    ?>
    <div class="table-responsive">
    <table class="table table-striped" style="vertical-align: middle;">
        <thead>
        <tr>
            <th scope="col">Dátum</th>
            <th scope="col">Idő</th>
            <th scope="col">Név</th>
            <th scope="col">E-mail</th>
            <th scope="col">Üzenet</th>
        </tr>
        </thead>
        <?php
        foreach($row as $sor) {
            ?><tr>
            <th scope="row"><?= print($sor['datum'])?></th>
            <td><?= print($sor['ido'])?></td>
            <td><?= print($sor['nev'])?></td>
            <td><?= print($sor['email'])?></td>
            <td><?= print($sor['szoveg'])?></td>
            </tr>   <?php   }   ?></table></div><?php
}
catch (PDOException $e) {
    $errormessage = "Hiba: ".$e->getMessage();
}
?>
