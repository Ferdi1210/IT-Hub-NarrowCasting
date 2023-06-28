<?php

    define('ROOT_URL', 'http://schoolwerk.nl/IT-Hub-NarrowCasting!/');
    define('ROOT_PATH','__DIR__');
    define('HOSTNAME', 'localhost');
    define('USERNAME', 'root');
    define('PASSWORD', '');
    define('DATABASE', 'narrowcasting');

    $oConnection = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);
    global $oConnection;

?>