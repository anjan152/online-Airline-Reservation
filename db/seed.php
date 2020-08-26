<?php
$database=new SQLite3('project.db');
$query=file_get_contents("db.sql");

        $database->exec($query);
    
    

