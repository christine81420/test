<?php
  $json_str = file_get_contents('php://inoput'); //接收request
  $json_obj = json_decode($json_str); //轉JSON格式

  $myfile = fopen("log.txt", "w+") or die("Unable to open file!");
    fwrite($myfile, "\xEF\xBB\xBf".$json_str);
    fclose($myfile);
?>
