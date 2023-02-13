<?php require("includes/header.php");
require("actions/function.php");
$todos = GetAllTodo($bdd);
$todos_encours = GetAllTodo_encours($bdd);
$todos_afaire = GetAllTodo_afaire($bdd);
$todos_fait = GetAllTodo_fait($bdd);


?>
<div class="super-container">
    <header>
        <div class="logo">Ma Todo</div>
    </header>
    <div class="content_task">

        <div class="container-task">
            <div class="card" style="width: 30rem;">
                <div class="card-body">
                    <h5 class="card-title">Faits</h5>
                    <?php if (empty($todos_fait)) { ?>
                        <p>Aucune tâche faite</p>
                    <?php } else { ?>

                        <?php foreach ($todos_fait as $todo_fait) { ?>
                            <a href="task_content.php?id=<?= $todo_fait['id'] ?>" class="btn btn-outline-success card-title"><?= $todo_fait['title'] ?></a> <br>
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle card-title" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Modifier le statut
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item card-title" href="actions/modif_todo.php?id=<?= $todo_fait['id'] ?>&statut=En cours">En cours</a></li>
                                    <li><a class="dropdown-item card-title" href="actions/modif_todo.php?id=<?= $todo_fait['id'] ?>&statut=A faire">A faire</a></li>
                                    <li><a class="dropdown-item card-title" href="actions/modif_todo.php?id=<?= $todo_fait['id'] ?>&statut=Supprimer">Supprimer</a></li>
                                </ul>
                            </div> <br> <br>
                    <?php
                        }
                    } ?>

                </div>
            </div>
            <div class="card" style="width: 30rem;">
                <div class="card-body">
                    <h5 class="card-title">En cours</h5>
                    <?php if (empty($todos_encours)) { ?>
                        <p>Aucune tâche en cours</p>
                    <?php } else { ?>
                        <?php foreach ($todos_encours as $todo_encours) { ?>
                            <a href="task_content.php?id=<?= $todo_encours['id'] ?>" class="btn btn-outline-success card-title"><?= $todo_encours['title'] ?></a> <br>
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle card-title" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Modifier le statut
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item card-title" href="actions/modif_todo.php?id=<?= $todo_encours['id'] ?>&statut=Fait">Fait</a></li>
                                    <li><a class="dropdown-item card-title" href="actions/modif_todo.php?id=<?= $todo_encours['id'] ?>&statut=A faire">A faire</a></li>
                                </ul>
                            </div> <br> <br>
                    <?php }
                    } ?>

                </div>
            </div>

            <div class="card" style="width: 30rem;">
                <div class="card-body">

                    <h5 class="card-title">A faire</h5>
                    <?php if (empty($todos_afaire)) { ?>
                        <p>Aucune tâche à faire</p>
                    <?php } else { ?>
                        <?php foreach ($todos_afaire as $todo_afaire) { ?>
                            <a href="task_content.php?id=<?= $todo_afaire['id'] ?>" class="btn btn-outline-success card-title">
                                <p><?= $todo_afaire['title'] ?></p>
                            </a> <br>
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle card-title" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Modifier le statut
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item card-title" href="actions/modif_todo.php?id=<?= $todo_afaire['id'] ?>&statut=En cours">En cours</a></li>
                                    <li><a class="dropdown-item card-title" href="actions/modif_todo.php?id=<?= $todo_afaire['id'] ?>&statut=Fait">Fait</a></li>

                                </ul>
                            </div> <br> <br>

                    <?php }
                    } ?>
                </div>

            </div>
        </div>



    </div>

    <footer>
        <p>© 2023 tout droit réservé</p>
    </footer>
</div>


<?php require("includes/footer.php") ?>