<?php
include('inc/header.php');
include('inc/functions.php');

if(isset($_GET['lang'])) {
    $lang = filter_input(INPUT_GET, "lang");
    $language = getLanguage($lang);
    $typeSystem = strtolower($language['type_system']);
    $releaseYear = $language['release_year'];
    $designer = getDesigner($lang);
    echo "<div class='content'>";
        echo "<div class='flex-wrap'>";
        echo "<div class='flex-item'>";
            echo "<div class='title'>$lang</div>";
            echo "Released in $releaseYear, $lang is a ";
            echo "<a href='static_vs_dynamic.php' class='to_underline'>";
                echo "$typeSystem" . "ally";
            echo "</a>";
            echo " typed programming language designed by $designer. ";
            include("inc/languages/$lang.php");
        echo "</div>";
        echo "</div>";
    echo "</div>";
}

include('inc/footer.php');