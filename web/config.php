<?php
$gl=(isset($_COOKIE['gl']) && $_COOKIE['gl'])?$_COOKIE['gl']:'HK';
define('ROOT_PART', Root_part());
define('APIKEY', getenv('APIKEY'));
define('GJ_CODE', $gl);
define('SITE_NAME', getenv('SITE_NAME'));
define('TITLENAME', getenv('TITLENAME'));
define('EN2DEKEY', getenv('EN2DEKEY'));
define('EMAIL', getenv('EMAIL'));
?>