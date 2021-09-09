<?php 

/***
 *
 * post.php/class Application :)) "
 * ____             _               ____       __  __
 * |  _ \  ___   ___| |_ ___  _ __  / ___|  ___|  \/  | ___
 * | | | |/ _ \ / __| __/ _ \| '__| \___ \ / _ \ |\/| |/ _ \
 * | |_| | (_) | (__| || (_) | |     ___) |  __/ |  | | (_) |
 * |____/ \___/ \___|\__\___/|_|    |____/ \___|_|  |_|\___/
 *
 * Semoo@dr.com
 * semo/26.07.2018 16:38
 ***/
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
// error_reporting(0);
// global $sqli;

	include("./config.php");


	$univ = sIO($_POST['univ']);
	$colleage = sIO($_POST['colleage']);
	$cert = sIO($_POST['cert']);
	$Utopia = sIO($_POST['Utopia']);
	$typeAccept = sIO($_POST['typeAccept']);
	$Score = sIO($_POST['Score']);
	$yosUnvi = sIO($_POST['univ2']);
	$IPadreass = $_SERVER['REMOTE_ADDR'];


	$i['status'] = '';

		if(!empty($univ) && !empty($colleage) && !empty($cert) && !empty($Utopia) && !empty($typeAccept) && !empty($Score)){
			if($univ !==0 && $cert !==0 && $Utopia !==0 && $typeAccept !==0 && $Score !==0){
				$sqli->query("INSERT INTO `resulet` (`id`, `nameUNV`, `collegeName`, `cert`,`yosUnvi`, `Mark`, `Utopia`, `typeAccept`, `time`, `ip`) VALUES (NULL, '$univ', '$colleage', '$cert','$yosUnvi', '$Score', '$Utopia', '$typeAccept', CURRENT_TIMESTAMP, '$IPadreass');");
				$i['status'] = 'ok';
			}else{
				$i['status'] = 'error';
			}
		}else{
			$i['status'] = 'error';
		}

		echo json_encode($i);



?>