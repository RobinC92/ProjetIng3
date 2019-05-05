<?php   
    require 'includes/connect_db.php';
    
    session_start();
    $id = $_GET['myid'];

    $pseudo = $_SESSION['pseudo'];
    if ($db_found) {
        $sql = "DELETE  FROM produit WHERE ID LIKE '%$id%'";
        $result = mysqli_query($db_handle, $sql);
    }
    header("Location: {$_SERVER['HTTP_REFERER']}");
    exit();
?>