<?php require("co_bdd.php");

if (isset($_POST['validate'])) {
    if (!empty($_POST['title']) && !empty($_POST['description'])) {
        $title = $_POST['title'];
        $description = $_POST['description'];

        $insert_todo = $bdd->prepare("INSERT INTO todo(title, description) VALUES (?,?)");
        $insert_todo->execute([
            $title,
            $description
        ]);
    } else {
        header("location: ../index?error=champs");
    }
}

var_dump($description);
