<?php   
    require 'includes/connect_db.php';

    function ajouterAuPanier($id){
        if ($db_found) {
            $sql = "SELECT * FROM individu";
            $result = mysqli_query($db_handle, $sql);
            if(){
                $array = array($id);
                $envoyer = serialize($array);
                $sql = "INSERT INTO individu(Panier)
                $pseudo = $_SESSION['pseudo']
                VALUES('$envpyer')
                WHERE Pseudo LIKE '%$pseudo%'";
            }
        }
    }
?>