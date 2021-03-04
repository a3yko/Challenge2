<?php

// Database configuration
$dbHost = "localhost";
$dbUsername = "cs4830";
$dbPassword = "M1zz0u@#";
$dbName = "images";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}