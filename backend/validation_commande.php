<?php   
    require 'includes/connect_db.php';
    session_start();
    $sql = "SELECT * FROM produit";
    $result = mysqli_query($db_handle, $sql);
    while ($db_field = mysqli_fetch_assoc($result)) {
        foreach($_SESSION['panier'] as $value){
            if($value == $db_field['ID']){
                $sql = "SELECT * FROM individu";
                $result2 = mysqli_query($db_handle, $sql);
                while ($db_field2 = mysqli_fetch_assoc($result2)) {
                    if($db_field['Pseudo'] == $db_field2['Pseudo']){
                        echo "Ici il se passedes byes sombres";
                        echo "<br>";
                        $pseudo = $db_field2['Pseudo'];
                        echo $pseudo;
                        echo "<br>";
                        $solde = $db_field['Prix'] + $db_field2['Solde'];
                        echo $solde;
                        echo "<br>";
                        $sql = "UPDATE individu
                        SET Solde = '$solde'
                        WHERE Pseudo LIKE '%$pseudo%'";
                        $result3 = mysqli_query($db_handle, $sql);
                    }
                }
            }
        }
    } 

    //header("Location: {$_SERVER['HTTP_REFERER']}");
    //exit();
?>