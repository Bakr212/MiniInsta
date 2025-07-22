<?php
if (!is_dir('photos')) {
    mkdir('photos');
}

if (isset($_POST['upload']) && isset($_FILES['image'])) {
    $target = 'photos/' . basename($_FILES['image']['name']);
    $imageFileType = strtolower(pathinfo($target, PATHINFO_EXTENSION));
    $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];

    if (in_array($imageFileType, $allowedTypes)) {
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
           
        } else {
            echo "Erreur lors de l'envoi du fichier.";
            exit;
        }
    } else {
        echo "Seules les images JPG, JPEG, PNG et GIF sont autorisées.";
        exit;
    }
}

header('Location: index.php');
exit;
