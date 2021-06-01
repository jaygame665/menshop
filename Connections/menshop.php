<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_menshop = "localhost";
$database_menshop = "jnshopfo_men";
$username_menshop = "jnshopfo_root";
$password_menshop = "12345678";
$menshop = mysql_pconnect($hostname_menshop, $username_menshop, $password_menshop) or trigger_error(mysql_error(),E_USER_ERROR);

?>