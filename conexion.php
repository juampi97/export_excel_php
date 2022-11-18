<?php
    define('DB_HOST','localhost');
    define('DB_USER','root');
    define('DB_PASS','');
    define('DB_NAME','laboratorio');

    $con=@mysqli_connect('localhost', 'root', '', 'laboratorio');
    mysqli_set_charset( $con, 'utf8');

?>