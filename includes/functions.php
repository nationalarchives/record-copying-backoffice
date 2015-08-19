<?php
/**
 * Created by PhpStorm.
 * User: gjones
 * Date: 12/01/2015
 * Time: 09:36
 */

function echoDate()
{
    date_default_timezone_set( 'UTC' );
    echo( date( 'j/m/Y' ) );
}

function scanFiles()
{
    if (getcwd()) {
        $currentDirectory = getcwd();
        $files            = scandir( $currentDirectory );
        $listItems        = "";
        foreach ($files as $value) {
            $lastThreeCharacters = substr( $value, - 3 );
            if ($lastThreeCharacters === "php") {
                $listItems .= sprintf( '<li><a href="%s">%s</a></li>', $value, $value );
            }
        }
        printf( '<ul class="prototype-pages">%s</ul>', $listItems );
    }
}

function checkFileName( $name )
{
    $currentFile = basename( $_SERVER['PHP_SELF'] );
    if ($currentFile === $name) {
        return true;
    } else {
        return false;
    }
}

function displayTargetDateOrLink( $targetDate )
{
    if ($targetDate) {

        $arrayOfDate = explode( '-', $targetDate );

        $reversedArrayOfDate = array_reverse( $arrayOfDate );

        $reversedDateString = implode( '/', $reversedArrayOfDate );

        echo '<strike>31/3/2014</strike> target date revised to ' . $reversedDateString . '<span id="revise-target-date">  <a href="revise-target-date-history.php">See revision history</a> or <a href="revise-target-date.php">revise target date</a></span>';
    } else {
        echo '31/3/2014 <a id="revise-target-date" href="revise-target-date.php">Revise target date</a>';
    }
}

function printLinksToUploadedfiles()
{

    if (isset($_FILES['images']) && count( $_FILES['images']['name'] ) > 0) {

        $ulFormat = "<ul class='emphasis-block'>%s</ul>";

        $lis = "";

        for ($i = 0; $i < count( $_FILES['images']['name'] ); $i ++) {

            $fileName = $_FILES['images']['name'][$i];

            $lis .= sprintf( '<li><a href="#" class="uploaded-file">%s</a></li>', $fileName );

        }

        printf( $ulFormat, $lis );
    }
}