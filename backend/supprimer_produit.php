<?php   
    require 'includes/connect_db.php';
    
    session_start();
    $id = $_GET['myid'];
    if ($db_found) {
        $sql = "DELETE  FROM produit WHERE ID LIKE '%$id%'";
        $result = mysqli_query($db_handle, $sql);
    }

    $envoyer = serialize($_SESSION['panier']);
    if ($db_found) {
        $sql = "SELECT * FROM individu ";    
		$result4 = mysqli_query($db_handle, $sql);
		while ($data = mysqli_fetch_assoc($result4)) {
            $envoyer = unserialize($data['Panier']);
            $pseudo = $data['Pseudo'];
            $tab = array();
            for($i=0;$i<count($envoyer);$i++){
                if($envoyer[$i]==$id){
                    unset($envoyer[$i]);
                    foreach  ($envoyer as $valeur){
                       array_push($tab,$valeur);
                    }
                    $tab = serialize($tab);
                    $sql = "UPDATE individu
                    SET Panier = '$tab'
                    WHERE Pseudo LIKE '%$pseudo%'";
                    $result2 = mysqli_query($db_handle, $sql);
                }
            }
        }
        $pseudo2 = $_SESSION['pseudo'];
        $sql = "SELECT * FROM individu WHERE Pseudo LIKE '%$pseudo2%'";
        $result3 = mysqli_query($db_handle, $sql);
        $data = mysqli_fetch_assoc($result);
        $_SESSION['Panier']= unserialize($data['Panier']);
    }
    header("Location: {$_SERVER['HTTP_REFERER']}");
    exit();
?>