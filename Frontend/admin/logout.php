<?php
    require('http://34.126.67.208:8080/admin/inc/essentials.php');

    session_start();
    session_destroy();
    redirect('index.php');


?>