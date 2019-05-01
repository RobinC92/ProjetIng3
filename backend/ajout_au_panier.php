<?php   
    require 'includes/connect_db.php';

    function ajouterAuPanier($id){
        session_start();
        $pseudo = $_SESSION['pseudo'];
        if ($db_found) {
            $sql = "SELECT * FROM individu WHERE Pseudo LIKE '%$pseudo%'";    
            $result = mysqli_query($db_handle, $sql);
            $data = mysqli_fetch_assoc($result);
            if($data['Pseudo'] == NULL){
                $_SESSION['pseudo'] = array($id);
                $envoyer = serialize($_SESSION['pseudo']);
                $sql = "INSERT INTO individu(Panier)
                VALUES('$envoyer')
                WHERE Pseudo LIKE '%$pseudo%'";
            }
            else{
                array_push($_SESSION['pannier'],$id);
                $envoyer = serialize($_SESSION['pseudo']);
                $sql = "INSERT INTO individu(Panier)
                VALUES('$envoyer')
                WHERE Pseudo LIKE '%$pseudo%'";
            }
        }
    }
?>