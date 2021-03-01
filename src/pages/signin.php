<?php
    // // Use a Data source name (DSN) to connect to Cloud SQL through the proxy
    // $dsn = sprintf('mysql:unix_socket=/src/cloudsql/finances-jdfraire:us-central1:root;dbname=Finances');
    // // Instantiate your DB using the DSN, username, and password
    // $dbUser = 'root';
    // $dbPass = 'jdfraire97';
    // $db = new PDO($dsn, $dbUser, $dbPass);
?>

<?php
    // Use a Data source name (DSN) to connect to Cloud SQL through the proxy
    $dsn = 'mysql:host=127.0.0.1;port=3306;dbname=Finances';
    // Instantiate your DB using the DSN, username, and password
    $dbUser = 'root';
    $dbPass = 'jdfraire97';
    $db = new PDO($dsn, $dbUser, $dbPass);
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