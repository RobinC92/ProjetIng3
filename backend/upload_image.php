<?php
function uploadImage($target_dir, $url)
{
    if (!empty($_FILES)) {
        echo $url;
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if (isset($_POST["submit"]) && !empty($_FILES["fileToUpload"]["tmp_name"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if ($check !== false) {
                $uploadOk = 1;
            } else {
                echo "<script type='text/javascript'>alert('Le fichier n'est pas une image);
                window.location.href = '" . $url . "';</script>";
                $uploadOk = 0;
            }
        }
        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 500000) {
            echo "<script type='text/javascript'>alert('Votre Fichier est trop volumineux');
            window.location.href = '" . $url . "';</script>";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif") {
            echo "<script type='text/javascript'>alert('Désolé nous acceptons uniquement les formats JPG, JPEG, PNG & GIF.');
            window.location.href = '" . $url . "';</script>";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                return $target_file;
            } else {
                echo "<script type='text/javascript'>alert('Une erreur est survenu pendant le téléchargement de votre image');
                window.location.href = '" . $url . "';</script>";
            }
        }
    }
}
