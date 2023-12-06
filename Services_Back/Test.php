<?php
require_once "Database.php";
$host="localhost";
$username = "root";
$password="root";
$database="test_db";

$db = new Database($host,$username, $password, $database);
$db->connect();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $formData = [
        'column1' => $_POST['column1'],
        'column2' => $_POST['column2'],
    ];

    $db->insertData('test_table', $formData);

    header("Location: Test.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<body>
<button id="storeIp">Stockez mon adresse IP</button>
<h2>Test Form</h2>

<form action="Test.php" method="post">
    Column1: <input type="text" name="column1"><br>
    Column2: <input type="text" name="column2"><br>
    <input type="submit">
</form>
<button id="showIp">Afficher mon adresse IP</button>
<p id="ip"></p>

<?php
function storeIp() {
    $response = file_get_contents('https://api.ipify.org?format=json');
    $data = json_decode($response, true);
    $ip = $data['ip'];
    setcookie('ip', $ip);
}

function showIp() {
    $ip = $_COOKIE['ip'] ?? '';
    echo "Votre adresse IP est : " . $ip;
}

function checkCookie($name) {
    return isset($_COOKIE[$name]);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['storeIp'])) {
        storeIp();
    }
}

?>


<h2>Test Form</h2>

<form action="Test.php" method="post">
    Column1: <input type="text" name="column1"><br>
    Column2: <input type="text" name="column2"><br>
    <input type="submit">
    <button name="storeIp">Stockez mon adresse IP</button>
    <input type="hidden" name="showIp" value="true">
</form>

<?php
if (isset($_POST['showIp'])) {
    showIp();
}
?>

</body>
</html>