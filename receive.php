<?php
  $json_str = file_get_contents('php://inoput'); //接收request
  $json_obj = json_decode($json_str); //轉JSON格式

  $myfile = fopen("log.txt", "w+") or die("Unable eto open file!")
    fwrite($myfile, "\xEF\x88\x8f".$json_str);
    fclose($myfile);
?>
