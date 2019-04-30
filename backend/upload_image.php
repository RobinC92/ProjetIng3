<?php
function uploadImage($target_dir)
{
    if (!empty($_FILES)) {
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if (isset($_POST["submit"]) && !empty($_FILES["fileToUpload"]["tmp_name"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if ($check !== false) {
                $uploadOk = 1;
            } else {
                echo "<script type='text/javascript'>alert('Le fichier n'est pas une image);</script>";
                $uploadOk = 0;
            }
        }
        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            echo "<script type='text/javascript'>alert('Votre Fichier est trop volumineux');</script>";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif") {
            echo ".";
            echo "<script type='text/javascript'>alert('Désolé nous acceptons uniquement les formats JPG, JPEG, PNG & GIF.');</script>";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "<script type='text/javascript'>alert('Votre image a été téléchargé avec succès');</script>";
                return $target_file;
            } else {
                echo "<script type='text/javascript'>alert('Une erreur est survenu pendant le téléchargement de votre image');</script>";
            }
        }
    }
}
