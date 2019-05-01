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
                $sql = "INSERT INTO individu(Panier)
                VALUES('$envoyer')
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
            $sql = "INSERT INTO individu(Panier)
            VALUES('$envoyer')
            WHERE Pseudo LIKE '%$pseudo%'";
        }
    }
?>