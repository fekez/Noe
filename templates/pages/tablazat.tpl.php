<?php
    try {
        $dbh = new PDO('mysql:host=localhost;dbname=noe', 'root', '',
                        array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
        
        $sqlSelect = "SELECT datum, ido, nev, email, szoveg FROM uzenetek ORDER BY datum DESC, ido DESC";
        $sth = $dbh->prepare($sqlSelect);
        $sth->execute();
        $row = $sth->fetchAll(PDO::FETCH_ASSOC);
        ?><table class="tablazat">
            <tr>
                <th>Dátum</th>
                <th>Idő</th>
                <th>Név</th>
                <th>E-mail</th>
                <th>Üzenet</th>
            </tr>
        <?php
        foreach($row as $sor) {
            ?><tr>
               <th><?= $sor['datum']?></th>
               <th><?= $sor['ido']?></th>
               <th><?= $sor['nev']?></th>
               <th><?= $sor['email']?></th>
               <th><?= $sor['szoveg']
               ?></th>
            </tr>   <?php   }   ?></table><?php
        }
    catch (PDOException $e) {
        $errormessage = "Hiba: ".$e->getMessage();
    }
?>
