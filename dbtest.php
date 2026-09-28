<?php $c=new mysqli('localhost','testuser','StrongP@ssw0rd','testdb'); if($c->connect_error) die('DB Error'); echo 'DB OK'; ?>
