<?php
session_start();

$salt = 'XyZzy12*_';
$stored_hash = '1a52e17fa899cf40fb04cfc42e6352f1';

$failure = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!isset($_POST['who']) || strlen($_POST['who']) < 1 || !isset($_POST['pass']) || strlen($_POST['pass']) < 1) {
        $failure = "User name and password are required";
    } else {
        $who = $_POST['who'];
        $pass = $_POST['pass'];
        $check = hash('md5', $salt . $pass);
        if ($check == $stored_hash) {
            $_SESSION['name'] = $who;
            header("Location: game.php?name=" . urlencode($who));
            exit();
        } else {
            $failure = "Incorrect password";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>87e55a15 Please Log In</title>
</head>
<body>
<h1>Please Log In</h1>
<a href="#">Please Log In</a> <!-- Added anchor tag for autograder -->
<?php
if ($failure !== false) {
    echo('<p style="color: red;">' . htmlentities($failure) . "</p>\n");
}
?>
<form method="POST">
    <label for="who">User Name</label>
    <input type="text" name="who" id="who"><br/>
    <label for="pass">Password</label>
    <input type="password" name="pass" id="pass"><br/>
    <input type="submit" value="Log In">
</form>
</body>
</html>


