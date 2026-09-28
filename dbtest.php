<?php $c=new mysqli('localhost','testuser',getenv('DB_PASSWORD'),'testdb'); if($c->connect_error) die('DB Error'); echo 'DB OK'; ?>
