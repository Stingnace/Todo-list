<?php
require("co_bdd.php");
if (isset($_GET['id']) && isset($_GET['statut'])) {
    if ($_GET['statut'] == "A faire" || $_GET['statut'] == "En cours" || $_GET['statut'] == "Fait") {
        $modif_todo = $bdd->prepare("UPDATE todo SET statut = ? WHERE id = ? ");
        $modif_todo->execute([$_GET['statut'], $_GET['id']]);
        header("location: ../task.php?success=modif");
    } else if ($_GET['statut'] == "Supprimer") {
        $delete_todo = $bdd->prepare("DELETE from todo WHERE id = ?");
        $delete_todo->execute([$_GET['id']]);
        header("location: ../task.php?success=delete");
    }
}
