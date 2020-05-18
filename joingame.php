<?php
$f=json_decode(file_get_contents("sost.txt"),true);
$f["sost"]="hod1";
file_put_contents("sost.txt",json_encode($f));
?>