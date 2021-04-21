<?php
	include('./includes/config.inc.php');
	if (isset($_GET['oldal'])) {
		$oldal = $_GET['oldal'];
		if (isset($oldalak[$oldal]) && file_exists("./templates/pages/{$oldalak[$oldal]['fajl']}.tpl.php")) {
			$keres = $oldalak[$oldal];
		}
		else if (isset($extrak[$oldal]) && file_exists("./templates/pages/{$extrak[$oldal]['fajl']}.tpl.php")) {
			$keres = $extrak[$oldal];
		}
		else { 
			$keres = $hiba_oldal;
			header("HTTP/1.0 404 Not Found");
		}
	}
	else $keres = $oldalak['/'];
	
	if (isset($oldalak['galeria']) && file_exist("./templates/pages/{$oldalak['galeria']['fajl']}.tpl.php") && $keres=='galeria')
	{
		$kepek = array();
		$olvaso = opendir($MAPPA);
		while (($fajl = readdir($olvaso)) !== false)	{
			 if (is_file($MAPPA.$fajl))	{
				 $vege = strtolower(substr($fajl, strlen($fajl)-4));
				if (in_array($vege, $TIPUSOK)) {
					 $kepek[$fajl] = filemtime($MAPPA.$fajl);
					 echo $kepek[$fajl];
				}
			}
		}
		closedir($olvaso);
	}
	include('./templates/index.tpl.php'); 
?>