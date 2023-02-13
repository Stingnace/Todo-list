<?php require("co_bdd.php");

if (isset($_POST['validate'])) {
    if (!empty($_POST['title'])) {
        $title = $_POST['title'];
        $description = nl2br($_POST['description']);
        $insert_todo = $bdd->prepare("INSERT INTO todo(title, description) VALUES (?, ?)");
        $insert_todo->execute([
            $title, $description
        ]);
    } else {
        header("location: ../index?error=champs");
    }
    header("location: ../task.php?sucess=ajout");
}
