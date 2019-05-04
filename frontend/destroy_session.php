<?php
    session_start();
    session_destroy();
    header("Location: page_principale.php");
    exit();
?>