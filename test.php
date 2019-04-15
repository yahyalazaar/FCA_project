<?php
include_once 'include_dao.php';
$admin = new AdminMySqlDAO();
$admin = $admin->queryAll();

echo date("Y-m-d H:m:s");




