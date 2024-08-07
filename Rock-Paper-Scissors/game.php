<?php
session_start();

if (!isset($_SESSION['name'])) {
    die("Name parameter missing");
}

if (isset($_POST['logout'])) {
    header('Location: index.php');
    exit();
}

$names = array('Rock', 'Paper', 'Scissors');
$human = isset($_POST['human']) ? $_POST['human'] : -1;
$computer = rand(0, 2);

function check($computer, $human) {
    if ($human == $computer) {
        return "Tie";
    } elseif (($human == 0 && $computer == 2) || 
              ($human == 1 && $computer == 0) || 
              ($human == 2 && $computer == 1)) {
        return "You Win";
    } else {
        return "You Lose";
    }
}

$result = false;
if ($human != -1) {
    $result = check($computer, $human);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>87e55a15 Rock Paper Scissors Game</title>
</head>
<body>
<h1>Rock Paper Scissors</h1>
<?php
if (isset($_SESSION['name'])) {
    echo "<p>Welcome, " . htmlentities($_SESSION['name']) . "</p>\n";
}
?>
<form method="POST">
    <select name="human">
        <option value="-1">Select</option>
        <option value="0">Rock</option>
        <option value="1">Paper</option>
        <option value="2">Scissors</option>
        <option value="3">Test</option>
    </select>
    <input type="submit" value="Play">
    <input type="submit" name="logout" value="Logout">
</form>

<?php
if ($human == 3) {
    echo "<pre>\n";
    for ($c = 0; $c < 3; $c++) {
        for ($h = 0; $h < 3; $h++) {
            $r = check($c, $h);
            echo "Human=$names[$h] Computer=$names[$c] Result=$r\n";
        }
    }
    echo "</pre>\n";
} elseif ($result !== false) {
    echo "<p>Your Play=" . $names[$human] . " Computer Play=" . $names[$computer] . " Result=" . $result . "</p>";
}
?>
</body>
</html>

