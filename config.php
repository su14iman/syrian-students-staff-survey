<?php
/***
 *
 * config.app.php/class Application :)) "
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


define("DB_Host","localhost");
define("DB_Username","root");
define("DB_Password","root");
define("DB_Table","AkellNEw");
define("DB_Charset","utf8");

date_default_timezone_set('Europe/Istanbul');


$sqli = new mysqli(DB_Host,DB_Username,DB_Password,DB_Table);
mysqli_set_charset($sqli,DB_Charset);



if(mysqli_connect_error()){
    echo mysqli_connect_error();
}

function sIO($ss){
    return addslashes(htmlspecialchars(trim($ss)));
}


