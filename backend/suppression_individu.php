<?php 

    require 'includes/connect_db.php';

    $pseudo = $_GET['pseudo'];

    $sql ="DELETE FROM individu WHERE Pseudo='$pseudo'";
    $result = mysqli_query($db_handle, $sql);

    session_start();

    $sql ="SELECT*FROM produit WHERE Pseudo='$pseudo'";
    $result = mysqli_query($db_handle, $sql);
    while ($data2 = mysqli_fetch_assoc($result)){
        echo"Basique <br>";
        $envoyer = serialize($_SESSION['panier']);
        if ($db_found) {
            $sql = "SELECT * FROM individu ";    
            $result4 = mysqli_query($db_handle, $sql);
            while ($data = mysqli_fetch_assoc($result4)) {
                echo"Classique <br>";
                $envoyer = unserialize($data['Panier']);
                $pseudo3 = $data['Pseudo'];
                $tab = array();
                for($i=0;$i<count($envoyer);$i++){
                    if($envoyer[$i]==$data2['ID']){
                        echo"Normalement c'est bon <br>";
                        unset($envoyer[$i]);
                        foreach  ($envoyer as $valeur){
                        array_push($tab,$valeur);
                        }
                        $tab = serialize($tab);
                        $sql = "UPDATE individu
                        SET Panier = '$tab'
                        WHERE Pseudo LIKE '%$pseudo3%'";
                        $result2 = mysqli_query($db_handle, $sql);
                    }
                }
            }
        }
    }

    $sql ="DELETE FROM produit WHERE Pseudo='$pseudo'";
    $result5 = mysqli_query($db_handle, $sql);

    $pseudo2 = $_SESSION['pseudo'];
    $sql = "SELECT * FROM individu WHERE Pseudo LIKE '%$pseudo2%'";
    $result3 = mysqli_query($db_handle, $sql);
    $data = mysqli_fetch_assoc($result);
    $_SESSION['Panier']= unserialize($data['Panier']);

    header("Location: {$_SERVER['HTTP_REFERER']}");
    exit();

 ?>