<?php require("co_bdd.php");

// RECUPERER TOUT LES ELEMENTS DE LA TABLE TODO 

function GetAllTodo($bdd)
{
    $req = $bdd->query('SELECT * FROM todo');
    $getalltodo = $req->fetchAll();
    return $getalltodo;
};

// AFFICHER LES TODO EN COURS
function GetAllTodo_encours($bdd)
{
    $req = $bdd->query('SELECT * FROM todo WHERE statut = "En cours"');
    $getalltodo_encours = $req->fetch();
    return $getalltodo_encours;
}


// AFFICHER LES TODO A faire 
function GetAllTodo_afaire($bdd)
{
    $req = $bdd->query('SELECT * FROM todo WHERE statut = "A faire"');
    $getalltodo_afaire = $req->fetchAll();
    return $getalltodo_afaire;
}
