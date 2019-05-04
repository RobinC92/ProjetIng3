<?php   
    require 'includes/connect_db.php';
    session_start();
    if ($db_found) {
        $sql = "SELECT * FROM produit";
        $result = mysqli_query($db_handle, $sql);
        while ($db_field = mysqli_fetch_assoc($result)) {
            foreach($_SESSION['panier'] as $value){
                if($value == $db_field['ID']){
                    $sql = "SELECT * FROM individu";
                    $result2 = mysqli_query($db_handle, $sql);
                    while ($db_field2 = mysqli_fetch_assoc($result2)) {
                        if($db_field['Pseudo'] == $db_field2['Pseudo']){
                            $pseudo = $db_field2['Pseudo'];
                            $solde = $db_field['Prix'] + $db_field2['Solde'];

                            $sql = "UPDATE individu
                            SET Solde = '$solde'
                            WHERE Pseudo LIKE '%$pseudo%'";
                            $result3 = mysqli_query($db_handle, $sql);

                            $ventes = $db_field['Ventes'] + 1;
                            $id = $db_field['ID'];
                            $sql = "UPDATE produit
                            SET Ventes = '$ventes'
                            WHERE ID LIKE '%$id%'";
                            $result4 = mysqli_query($db_handle, $sql);
                        }
                    }
                }
            }
        }
    }

    $_SESSION['panier'] = array();
    $envoyer = serialize($_SESSION['panier']);
    $pseudo = $_SESSION['pseudo'];
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