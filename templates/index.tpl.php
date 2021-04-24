<?php session_start(); ?>
<?php if(file_exists('./logicals/'.$keres['fajl'].'.php')) { include("./logicals/{$keres['fajl']}.php"); } ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?= $ablakcim['cim'] . ( (isset($ablakcim['mottó'])) ? ('|' . $ablakcim['mottó']) : '' ) ?></title>
	<link rel="stylesheet" href="./styles/stilus19.css" type="text/css">
	<?php if(file_exists('./styles/'.$keres['fajl'].'2.css')) { ?><link rel="stylesheet" href="./styles/<?= $keres['fajl']?>2.css" type="text/css"><?php } ?>
</head>
<body>
	<?php if(file_exists('./templates/pages/header.php')) include('./templates/pages/header.php') ?>
    <div id="wrapper">

        <div id="content">
			<?php if(file_exists("./templates/pages/{$keres['fajl']}.tpl.php")) include("./templates/pages/{$keres['fajl']}.tpl.php") ?>
        </div>
    </div>
    <?php if(file_exists('./templates/pages/footer.php')) include('./templates/pages/footer.php') ?>
</body>
</html>
