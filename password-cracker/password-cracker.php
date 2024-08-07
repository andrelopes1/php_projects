<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MD5 Cracker</title>
</head>
<body>
    <h1>MD5 cracker</h1>
    <p>This application takes an MD5 hash of a four digit pin and check all 10,000 possible four digit PINs to determine the PIN.</p>
    
    <pre>
Debug Output:
<?php
$found = false;
$show = 15;

if (isset($_GET['md5'])) {
    $time_pre = microtime(true);
    $md5 = $_GET['md5'];

    // Loop through all possible 4-digit PINs
    for ($i = 0; $i <= 9999; $i++) {
        $pin = str_pad($i, 4, '0', STR_PAD_LEFT);
        $check = hash('md5', $pin);

        // Print the first 15 attempts
        if ($show > 0) {
            echo "Attempt $pin: $check\n";
            $show--;
        }

        // Check if we have a match
        if ($check == $md5) {
            $found = $pin;
            break;
        }
    }
    
    $time_post = microtime(true);
    $elapsed = $time_post - $time_pre;
}

if ($found !== false) {
    echo "PIN: $found\n";
} else {
    echo "PIN: Not found\n";
}

if (isset($elapsed)) {
    echo "Elapsed time: $elapsed seconds\n";
}
?>
    </pre>
    
    <form>
        <input type="text" name="md5" size="40" placeholder="Enter MD5 hash">
        <input type="submit" value="Crack MD5">
    </form>

    <ul>
        <li><a href="?">Reset this page</a></li>
        <li><a href="makepin.php">Make an MD5 PIN</a></li>
        <li><a href="md5.php">MD5 Encoder</a></li>
        <li><a href="https://www.wa4e.com/assn/crack/" target="_blank">Specification for this assignment</a></li>
        <li><a href="https://www.wa4e.com/code/crack.zip" target="_blank">Source code similar to this application</a></li>
    </ul>
</body>
</html>


