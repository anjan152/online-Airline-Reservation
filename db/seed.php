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