<?php
$phpSelf = htmlentities($_SERVER['PHP_SELF'], ENT_QUOTES, 'UTF-8');

$path_parts = pathinfo($phpSelf);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Title of Site</title>
        
        <meta charset="UTF-8">
        <meta name="author" content="Landon Cayia, Lauren Paicopolis, and Natalie Barton">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="../style/final.css?version=<?php print time(); ?>" type="text/css" media="screen">
        <style>
            @import url('https://fonts.googleapis.com/css?family=Roboto');
        </style>

<?php

// PATH SETUP

$domain = '//';

$server = htmlentities($_SERVER['SERVER_NAME'], ENT_QUOTES, 'UTF-8');

$domain .= $server;

// INCLUDE LIBRARY FILES

print PHP_EOL . '<!-- include libraries -->' . PHP_EOL;

// **libraries here**

print PHP_EOL . '<!-- finished including libraries -->' . PHP_EOL;
?>
    </head>

<!-- Body Section -->
<?php
print '<body id="' . $path_parts['filename'] . '">' . PHP_EOL;

include 'nav.php';
print PHP_EOL;

include 'header.php';
print PHP_EOL;

print '<!-- End of top.php -->';
?>

<!-- Main Section -->
<?php print PHP_EOL; ?>