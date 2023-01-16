<?php
include('inc/header.php');
include('inc/functions.php');
$decades = ['1950', '1960', '1970', '1980','1990','2000','2010'];
foreach($decades as $decade){
    echo "<div class='decade'>";
        $languages = getLangs($decade);
        $years = [];
        foreach($languages as $language){
            $years[] = $language['release_year'];
        }
        $arrLength = count($languages);
        for($i=0; $i<$arrLength; $i++){
            $language = $languages[$i]['language'];
            $languageID = str_replace(' ', '', strtolower($language));
            $languageID = str_replace('+', 'p', $languageID);
            $languageID = str_replace('#', 'sharp', $languageID);
            $year = $languages[$i]['release_year'];
            $previousYear = null;
            if (isset($languages[$i-1])) {
                $previousYear = $languages[$i-1]['release_year'];
            }
            $nextYear = null;
            if (isset($languages[$i+1])) {
                $nextYear = $languages[$i+1]['release_year'];
            }
            //chek if other languages have been released the same year
            if ($previousYear !== $year && $year === $nextYear){
                echo "<div id='group'>";
            }
            echo "<a href='details.php?lang=" . urlencode($language) . "'>";
            echo "<div class='language' id='$languageID'>";
                echo $language;
            echo "</div>";
            echo "</a>";
            if ($previousYear === $year && $year !== $nextYear) {
                echo '</div>'; /* close #group div */
            }
        }
        echo "<div class='years'>";
            echo $decade . 's';
        echo "</div>";
    echo "</div>";
}
include('inc/footer.php')
?>