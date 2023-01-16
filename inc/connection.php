<?php

//handle exceptions
try {
    $user='postgres';
    $pass='munk';
    //a driver is a piece of software that connects one thing to another. For ex MySQL to PHP
    //the DB name is case sensitive
    $db = new PDO("pgsql:host=localhost;dbname=progLangs", $user, $pass);
    
    // -> is the object operator
    //tell PDO to throw an exception for any issue
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//we use an object instantiating php's native Exception class. The variable $e will contain the details about the exception
} catch (Exception $e) {
    echo "Unable to connect: ";
    //run a method on $e
    echo $e->getMessage();
    //stop any more code from executing
    exit;
}

/*
$sql = "SELECT COUNT(language) from prog_langs";
$result = $db->query($sql);
$count = $result->fetchColumn(0);
echo $count; */