<?php
$arrFiles = array();
$handle = opendir('/apk');
if ($handle) {
    while (($entry = readdir($handle)) !== FALSE) {
        $arrFiles[] = $entry;
    }
}
closedir($handle);
?>