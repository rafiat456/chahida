<?php

//require '../../vendor/autoload.php';
//$app = require_once '../../bootstrap/app.php';
//$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
//
//\Dotenv::load($app->environmentPath(), $app->environmentFile());

$DB_HOST=getenv('DB_HOST');
$DB_DATABASE=getenv('DB_DATABASE');
$DB_USERNAME=getenv('DB_USERNAME');
$DB_PASSWORD=getenv('DB_PASSWORD');
$mysqli = new mysqli($DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_DATABASE);


/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>