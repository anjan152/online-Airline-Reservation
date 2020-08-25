<?php
$database=new SQLite3('project.db');
$pdo=new PDO("sqlite:project.db");
$query=file_get_contents("db.sql");
$stringArray=explode(";",$query);
foreach($stringArray as $q)

{
    if(!ctype_space($q)&& $q!="")
    {
        $pdo->exec($q);
    }
    
}
