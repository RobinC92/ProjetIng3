<?php   
    require 'includes/connect_db.php';

    function ajouterAuPanier($id){
        session_start();
        $pseudo = $_SESSION['pseudo'];
        if ($db_found) {
            $sql = "SELECT * FROM individu WHERE Pseudo LIKE '%$pseudo%'";    
            $result = mysqli_query($db_handle, $sql);
            $data = mysqli_fetch_assoc($result);
            if($data['Panier'] == NULL){
                $_SESSION['panier'] = array($id);
                $envoyer = serialize($_SESSION['panier']);
                $sql = "INSERT INTO individu(Panier)
                VALUES('$envoyer')
                WHERE Pseudo LIKE '%$pseudo%'";
            }
            else{
                array_push($_SESSION['pannier'],$id);
                $envoyer = serialize($_SESSION['panier']);
                $sql = "UPDATE individu
                SET Panier = '$envoyer'
                WHERE Pseudo LIKE '%$pseudo%'";
            }
        }
    }

    function supprimerDuPanier($id){
        session_start();
        $pseudo = $_SESSION['pseudo'];
        unset($_SESSION['pannier'][array_search($id, $_SESSION['pannier'])]);
        $envoyer = serialize($_SESSION['panier']);
        if ($db_found) {
            $envoyer = serialize($_SESSION['pseudo']);
            $sql = "UPDATE individu
            SET Panier = '$envoyer'
            WHERE Pseudo LIKE '%$pseudo%'";
        }
    }

    function totalAPayer(){
        session_start();
        $total = 0;
        $sql = "SELECT * FROM produit";
        $result = mysqli_query($db_handle, $sql);
        while ($db_field = mysqli_fetch_assoc($result)) {
            foreach($_SESSION['panier'] as $value){
                if($value == $db_field['id']){
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
                if($value == $db_field['id']){
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