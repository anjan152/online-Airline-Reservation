<?php
$database = new SQLite3('project.db');
$query = file_get_contents("db.sql");

$database->exec($query);

$setAdmin = 'INSERT INTO users(email, password, is_admin) VALUES(?, ?, ?);';
$query = $database->prepare($setAdmin);
$query->bindValue(1, "admin@gmail.com", SQLITE3_TEXT);
$query->bindValue(2, password_hash("12345678", PASSWORD_DEFAULT), SQLITE3_TEXT);
$query->bindValue(3, 1, SQLITE3_INTEGER);
$query->execute();



$setClasses = 'INSERT INTO flight_classes(class, additional_charge, additional_facilities) VALUES(?, ?, ?);';
$query = $database->prepare($setClasses);
$query->bindValue(1, "First Class", SQLITE3_TEXT);
$query->bindValue(2, 1000, SQLITE3_INTEGER);
$query->bindValue(3, "N/A", SQLITE3_TEXT);
$query->execute();

$setClasses = 'INSERT INTO flight_classes(class, additional_charge, additional_facilities) VALUES(?, ?, ?);';
$query = $database->prepare($setClasses);
$query->bindValue(1, "Second Class", SQLITE3_TEXT);
$query->bindValue(2, 500, SQLITE3_INTEGER);
$query->bindValue(3, "N/A", SQLITE3_TEXT);
$query->execute();


$setClasses = 'INSERT INTO flight_classes(class, additional_charge, additional_facilities) VALUES(?, ?, ?);';
$query = $database->prepare($setClasses);
$query->bindValue(1, "Third Class", SQLITE3_TEXT);
$query->bindValue(2, 0, SQLITE3_INTEGER);
$query->bindValue(3, "N/A", SQLITE3_TEXT);
$query->execute();