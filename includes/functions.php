<?php
/**
 * Created by PhpStorm.
 * User: gjones
 * Date: 12/01/2015
 * Time: 09:36
 */

function echoDate() {
    date_default_timezone_set('UTC');
    echo(date('j/m/Y'));
}

function scanFiles() {
    if(getcwd()){
        $currentDirectory = getcwd();
        $files = scandir($currentDirectory);
        $listItems = "";
        foreach ($files as $value) {
            $lastThreeCharacters = substr($value, -3);
            if($lastThreeCharacters === "php"){
                $listItems .= sprintf('<li><a href="%s">%s</a></li>', $value, $value);
            }
        }
        printf('<ul class="prototype-pages">%s</ul>', $listItems);
    }
}

function checkFileName($name) {
    $currentFile = basename($_SERVER['PHP_SELF']);
    if($currentFile === $name) {
        return true;
    } else {
        return false;
    }
}

function displayTargetDateOrLink($targetDate) {
    if($targetDate) {

        $arrayOfDate = explode('-', $targetDate);

        $reversedArrayOfDate = array_reverse($arrayOfDate);

        $reversedDateString = implode('/', $reversedArrayOfDate);

        echo '<strike>31/3/2014</strike> target date revised to ' . $reversedDateString;
    } else {
        echo '31/3/2014 <a id="revise-target-date" href="revise-target-date.php">Revise target date</a>';
    }
}