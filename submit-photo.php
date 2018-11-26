<?php include 'top.php';

print PHP_EOL . '<!-- Initialize Variables -->' . PHP_EOL;

$name = '';

$email = '';

$location = '';

$image = '';

print PHP_EOL . '<!-- Initialize Error Flags -->' . PHP_EOL;

$nameERROR = false;

$emailERROR = false;

$locationERROR = false;

$imageERROR = false;

print PHP_EOL . '<!-- Error Array & Mailed Flag -->' . PHP_EOL;

$errorMsg = array();

$mailed = false;

print PHP_EOL . '<!-- Process for when form is submitted -->' . PHP_EOL;

if (isset($_POST["btnSubmit"])) {
    
    print PHP_EOL . '<!-- Security -->' . PHP_EOL;
    
    $thisURL = $domain . $phpSelf;
    if (!securityCheck($thisURL)) {
        $msg = '<p>Sorry, you cannot access this page. A security breach has'
                . 'been detected and reported.';
        die($msg);
    }
    
    print PHP_EOL . '<!-- Sanitize Data -->' . PHP_EOL;
    
    $name = htmlentities($_POST["txtName"], ENT_QUOTES, "UTF-8");
    
    $email = filter_var($_POST["txtEmail"], FILTER_SANITIZE_EMAIL);
    
    $location = htmlentities($_POST["txtName"], ENT_QUOTES, "UTF-8");
    
    $image = htmlentities($_POST["txtName"], ENT_QUOTES, "UTF-8");
}