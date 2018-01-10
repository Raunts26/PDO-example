<?php
define( 'SCRIPT_ROOT', 'http://projecty.codeloops.ee' );

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$connection = new PDO('mysql:host=codeloops.ee;dbname=vhost50495s12;charset=utf8', 'vhost50495s12', 'mtcVVdh2');
//$mysqli = new mysqli($servername, $server_username, $server_password, $database);

include 'modules/php/pages.php';

$Pages = new Pages($connection);


?>
