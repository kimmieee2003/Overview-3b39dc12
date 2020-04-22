<?php
$dbh = new PDO(
    'mysql:host=127.0.0.1;port:3306;dbname=netland', 
    'root', 
    ''
);
echo 'connected to Netland';
echo $dbh->query('select version()')->fetchColumn();


?>