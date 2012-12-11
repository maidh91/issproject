<?php
	$sql = '  (DESCRIPTION =
    (ADDRESS = (PROTOCOL = TCP)(HOST = 127.0.0.1)(PORT = 1521))
    (CONNECT_DATA =
      (SERVER = DEDICATED)
      (SERVICE_NAME = orcl)
    )
  )';
    define("USERNAME","system");
    define("PASSWORD","abc123");
    define("HOST",$sql);
?>
