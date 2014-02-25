<?php

error_reporting(E_ALL);

define('HONG',1);

define('ROOT',dirname(__FILE__)."/");
define('GLOBLM',ROOT."global/m/");
define('GLOBLV',ROOT."global/v/");

$m=isset($_GET["m"])?$_GET["m"]:"index";
$a=isset($_GET["a"])?$_GET["a"]:"index";

define('MDIR',ROOT."index/$m/m/");#model dir
define('VDIR',ROOT."index/$m/v/");#view dir
define('CDIR',ROOT."index/$m/c/");#controller dir

$static='global/s';#static link
$depot="index/$m/s";#depot link
$site="http://pay.com/";

foreach ($_GET as $key => $value) {
  $$key=$value;
}
$id=(int)$id;
$page=(int)$page;

if($m&&$a):
  require(MDIR."model.php");
  require(CDIR."controller.php");
  require(VDIR."$a.htm");
endif;

?>
