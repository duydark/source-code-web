<?php
$khangduy = new mysqli("localhost","root","","banlaptop");

// Check connection
if ($khangduy -> connect_errno) {
  echo "Ket noi voi SQL bi loi: " . $khangduy-> connect_error;
  exit();
}


	$khangduy -> set_charset("utf8");

	$khangduy -> character_set_name();


?>