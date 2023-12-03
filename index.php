<html>
 <head>
  <title>Prueba de PHP</title>
 </head>
 <body>
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
 </body>
</html>

