<?php require("co_bdd.php");

if (isset($_POST['validate'])) {
    if (!empty($_POST['title'])) {
        $title = $_POST['title'];
        $insert_todo = $bdd->prepare("INSERT INTO todo(title) VALUES (?)");
        $insert_todo->execute([
            $title,
        ]);
    } else {
        header("location: ../index?error=champs");
    }
    header("location: ../task.php?sucess=ajout");
}
