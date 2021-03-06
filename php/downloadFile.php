<?php
include_once('_app.inc');
include_once('_config.inc');

$HOT_DIR = $app_data_url . "app/";

$id = $_GET['id'];
$version = $_GET['version'];
$os_id = $_GET['os_id'];

$file = $HOT_DIR . get_app_file_by_id_version($id,$version,$os_id);

set_time_limit(0);
ini_set('memory_limit', '512M');
header("Content-type: octet/stream");
header("Content-disposition:attachment;filename=".basename($file));
header("Content-Length:".filesize($file));
ob_end_clean();
readfile($file);
exit;
?>
