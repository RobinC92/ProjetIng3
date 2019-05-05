<?php   
    require 'includes/connect_db.php';
    
    session_start();
    $id = $_GET['myid'];

    $pseudo = $_SESSION['pseudo'];
    if ($db_found) {
        $sql = "SELECT * FROM individu WHERE Pseudo LIKE '%$pseudo%'";    
        $result = mysqli_query($db_handle, $sql);
        $data = mysqli_fetch_assoc($result);
        if($data['Panier'] == NULL){
            $_SESSION['panier'] = array($id);
            $envoyer = serialize($_SESSION['panier']);
            $sql = "UPDATE individu
            SET Panier = '$envoyer'
            WHERE Pseudo LIKE '%$pseudo%'";
            $result = mysqli_query($db_handle, $sql);
        }
        else{
            array_push($_SESSION['panier'],$id);
            $envoyer = serialize($_SESSION['panier']);
            $sql = "UPDATE individu
            SET Panier = '$envoyer'
            WHERE Pseudo LIKE '%$pseudo%'";
            $result = mysqli_query($db_handle, $sql);
        }
    }
    header("Location: {$_SERVER['HTTP_REFERER']}");
    exit();
?>