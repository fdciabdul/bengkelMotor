<?php
// Database configuration
session_start();
$dbHost     = "localhost";
$dbUsername = "mengontol";
$dbPassword = "calang123123";
$dbName     = "rnjmotordatabase";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>