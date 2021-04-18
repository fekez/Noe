<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?= $ablakcim['cim'] . ( (isset($ablakcim['mottó'])) ? ('|' . $ablakcim['mottó']) : '' ) ?></title>
	<link rel="stylesheet" href="./styles/stilus.css" type="text/css">
	<?php if(file_exists('./styles/'.$keres['fajl'].'.css')) { ?><link rel="stylesheet" href="./styles/<?= $keres['fajl']?>.css" type="text/css"><?php } ?>
</head>
<body>
	<?php if(file_exists('./templates/pages/header.php')) include('./templates/pages/header.php') ?>
    <div id="wrapper">
		<?php if(file_exists('./templates/pages/aside.php')) include('./templates/pages/aside.php') ?>

        <div id="content">
            <?php include("./templates/pages/{$keres['fajl']}.tpl.php"); ?>
        </div>

    </div>
	<?php if(file_exists('./templates/pages/footer.php')) include('./templates/pages/footer.php') ?>
</body>
</html>