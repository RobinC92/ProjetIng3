<?php   
    
    function ajouterAuPanier($id){
        //session_start();
        require 'includes/connect_db.php';
        $pseudo = $_SESSION['pseudo'];
        if ($db_found) {
            $sql = "SELECT * FROM individu WHERE Pseudo LIKE '%$pseudo%'";    
            $result = mysqli_query($db_handle, $sql);
            $data = mysqli_fetch_assoc($result);
            if($data['Panier'] == NULL){
                echo "Option 1 <br>";
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
    }

    function supprimerDuPanier($id){
        require 'includes/connect_db.php';
        //session_start();
        $pseudo = $_SESSION['pseudo'];
        unset($_SESSION['panier'][array_search($id, $_SESSION['panier'])]);
        $envoyer = serialize($_SESSION['panier']);
        if ($db_found) {
            $envoyer = serialize($_SESSION['panier']);
            $sql = "UPDATE individu
            SET Panier = '$envoyer'
            WHERE Pseudo LIKE '%$pseudo%'";
            $result = mysqli_query($db_handle, $sql);
        }
    }

    function totalAPayer(){
        //session_start();
        require 'includes/connect_db.php';
        $total = 0;
        $sql = "SELECT * FROM produit";
        $result = mysqli_query($db_handle, $sql);
        while ($db_field = mysqli_fetch_assoc($result)) {
            foreach($_SESSION['panier'] as $value){
                if($value == $db_field['ID']){
                    $total = $total + $db_field['Prix'];
                }
            }
        }
    return $total;
    }

    function validerCommande(){
        $sql = "SELECT * FROM produit";
        $result = mysqli_query($db_handle, $sql);
        while ($db_field = mysqli_fetch_assoc($result)) {
            foreach($_SESSION['panier'] as $value){
                if($value == $db_field['ID']){
                    $sql = "SELECT * FROM individu";
                    $result2 = mysqli_query($db_handle, $sql2);
                    while ($db_field2 = mysqli_fetch_assoc($result2)) {
                        if($db_field['Pseudo'] == $db_field2['Pseudo']){
                            $pseudo = $db_field2['Pseudo'];
                            $solde = $db_field1['Prix'] + $db_field2['Solde'];
                            $sql = "UPDATE individu
                            SET Solde = '$solde'
                            WHERE Pseudo LIKE '%$pseudo%'";
                        }
                    }
                }
            }
        } 
    }
?>