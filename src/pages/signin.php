<?php
$username = 'root';
$password = 'jdfraire97';
$dbName = 'Finances';
$connectionName = getenv("finances-jdfraire:us-central1:root");
$socketDir = getenv('/cloudsql/finances-jdfraire:us-central1:root') ?: '/cloudsql';

// Connect using UNIX sockets
$dsn = sprintf(
    'mysql:dbname=%s;unix_socket=%s/%s',
    $dbName,
    $socketDir,
    $connectionName
);

// Connect to the database.
$conn = new PDO($dsn, $username, $password, $conn_config);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>FINANCES JDFRAIRE</h1>
    <form action="signin">
        <p>Signin</p>
        <div>
            <label for="input-userID">User</label>
            <input type="text" id="input-userID" >
        </div>
        <div>
            <label for="input-userID">Password</label>
            <input type="password" id="input-userID">
        </div>
        <div>
            <a href="signup">create account</a>
        </div>
        <input type="submit" id="input-userID">    
    </form>
</body>
</html>