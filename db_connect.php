<?php

$config = require_once 'db_config.php';

try {
    $db = new PDO("mysql:host={$config['host']};dbname={$config['dbname']};charset=utf8", $config['user'], $config['pass']);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch (PDOException $error) {
    echo "database connection error";
}
