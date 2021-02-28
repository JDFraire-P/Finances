<?php
$request = $_SERVER['REQUEST_URI'];

if($request[0] != '/') {
    $request = '/' . $request;
}

$partes = explode('?', $request);

$request = $partes[0];

echo $request;

switch ($request) {
    case "/signin":
    case '/':
        require __DIR__ . '/pages/signin.php';
    break;

    case '/signup' :
        require __DIR__ . '/pages/signup.php';
    break;

    default:
        http_response_code(404);
        require __DIR__ . '/pages/404.php';
    break;
}
?>