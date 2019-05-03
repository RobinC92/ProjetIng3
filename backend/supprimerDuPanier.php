<?php
    require 'includes/connect_db.php';

    session_start();
    $id = $_GET['myid'];

    $pseudo = $_SESSION['pseudo'];
    $tab = array();
    unset($_SESSION['panier'][array_search($id, $_SESSION['panier'])]);
    echo count($_SESSION['panier']);
    foreach  ($_SESSION['panier'] as $valeur){
        array_push($tab,$valeur);
    }
    $_SESSION['panier'] = $tab;
    $envoyer = serialize($_SESSION['panier']);
    if ($db_found) {
        $envoyer = serialize($_SESSION['panier']);
        $sql = "UPDATE individu
        SET Panier = '$envoyer'
        WHERE Pseudo LIKE '%$pseudo%'";
        $result = mysqli_query($db_handle, $sql);
    }
    header("Location: {$_SERVER['HTTP_REFERER']}");
    exit();
?>