<?php
function getLangs($decade=1950) {
    include('connection.php');
    $decade_end = $decade + 9;
    try {
        $sql = "SELECT language, release_year FROM prog_langs
            WHERE release_year >= $decade AND release_year <= $decade_end
            ORDER BY release_year";
        $result = $db->query($sql);
        $languages = $result->fetchAll(PDO::FETCH_ASSOC);
        return $languages;
        //var_dump($languages);
    } catch(Exception $e) {
        echo "Bad query";
        exit;
    }
}

function getLanguage($lang){
    include('connection.php');
    try {
        $sql = "SELECT type_system, release_year from prog_langs
            WHERE language = '$lang'";
        $query = $db->query($sql);
        $language = $query->fetch(PDO::FETCH_ASSOC);
        return $language;
    } catch(Exception $e) {
        echo "Bad query";
        exit;
    }
}

function getDesigner($lang){
    include('connection.php');
    try {
        $sql = "SELECT designer from designed_by WHERE language = '$lang'";
        $query = $db->query($sql);
        $designer = $query->fetch(PDO::FETCH_ASSOC);
        return $designer['designer'];
    } catch(Exception $e) {
        echo "Bad query, designer not found.";
        exit;
    }
}