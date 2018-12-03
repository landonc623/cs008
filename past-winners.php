<?php include '../top.php' ?>

<?php 
$debug = false;
if (isset($_GET["debug"])){
    $debug = true;
}

$myFolder = 'data/';
$myFileName = 'Winners';
$fileExt = '.csv';
$filename = $myFolder . $myFileName . $fileExt;

if ($debug)
    print '<p>filename is ' . $filename;
$file = fopen($filename, "r");

if ($debug){
    if ($file) {
        print '<p>File Opened Succesful</p>';
    } else {
        print '<p>File Open Failed</p>';
    }
}

if ($file) {
    if ($debug)
        print '<p>Begin reading data into an array</p>';
    $headers[] = fgetcsv($file);
    
    if ($debug) {
        print '<p>Finished reading headers</p>';
        print '<p>My header array</p><pre>';
        print_r($headers);
        print '</pre>';
 }
    while (!feof($file)) {
        $winnerdetails[] = fgetcsv($file);
 }
    if ($debug) {
        print '<p>Finished reading data. File closed</p>';
        print '<p>My data array<p><pre>';
        print_r($winnerdetails);
        print '</pre></p>';
        
    }
}

fclose($file);
    

?>

<main>
    <article>
        <h3>Some of the past winners of our contest include...</h3>
        <table>
            
            <?php
            foreach ($headers as $header) {
                print '<tr>';
                print '<th>' . $header{0} . '</th>';
                print '<th>' . $header{1} . '</th>';
                print '<th>' . $header{2} . '</th>';
                print '</tr>';
            }
            
            foreach ($winnerdetails as $winnerdetail) {
                print '<tr>';
                print '<td>' . $winnerdetail{0} . '</td>';
                print '<td>' . $winnerdetail{1} . '</td>';
                print '<td>' . $winnerdetail{2} . '</td>';
                print '</tr>';
            }
            
            print '<tr><td colspan="10">Total Number of Winners: ' . count($winnerdetails) . '</td></tr>';
            ?>
            
        </table>            
    </article>
</main>

<?php include '../footer.php' ?>

</body>
</html>
