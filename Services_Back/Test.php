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
<script>
document.getElementById('storeIp').addEventListener('click', function() {
    fetch('https://api.ipify.org?format=json')
        .then(response => response.json())
        .then(data => {
            document.cookie = "ip=" + data.ip;
        });
});
document.getElementById('showIp').addEventListener('click', function() {
    var ip = document.cookie.replace(/(?:(?:^|.*;\s*)ip\s*\=\s*([^;]*).*$)|^.*$/, "$1");//expression régulière pour récup la valeur dans le cookie
    document.getElementById('ip').textContent = "Votre adresse IP est : " + ip;
});
function checkCookie(name) {
    return document.cookie.includes(name + "=");
}

var cookieExists = checkCookie("ip");
</script>

</body>
</html>