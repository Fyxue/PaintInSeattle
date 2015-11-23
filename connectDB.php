<?php
/**
 * Created by PhpStorm.
 * User: xuefeiyang
 * Date: 11/22/15
 * Time: 2:58 PM
 */
function connectDB()
{
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=paint;", "root", "");
    } catch (PDOException $e) {
        die("Fail to connect" . $e->getMessage());
    }
    return $pdo;
}