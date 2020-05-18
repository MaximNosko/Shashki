<?php
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");//для предотвращения кэширования
echo file_get_contents("sost.txt");
?>