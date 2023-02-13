<?php require("includes/header.php");
require("actions/function.php");
$todos = GetAllTodo($bdd);
$todos_encours = GetAllTodo_encours($bdd);
$todos_afaire = GetAllTodo_afaire($bdd);



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
                    <a href="#" class="btn btn-outline-success">Go somewhere</a> <br> <br>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Statut</option>
                        <option value="1">A faire</option>
                        <option value="2">En cours</option>
                        <option value="3">Fait</option>
                    </select>

                </div>
            </div>
            <div class="card" style="width: 30rem;">
                <div class="card-body">
                    <h5 class="card-title">En cours</h5>
                    <a href="#" class="btn btn-outline-success">Go somewhere</a> <br><br>
                    <select class="form-select" aria-label="Default select example">
                        <option selected><a href=""></a></option>
                        <option value="1">A faire</option>
                        <option value="2">En cours</option>
                        <option value="3">Fait</option>
                    </select>

                </div>
            </div>

            <div class="card" style="width: 30rem;">
                <div class="card-body">

                    <h5 class="card-title">A faire</h5>
                    <?php foreach ($todos_afaire as $todo_afaire) { ?>
                        <a href="#" class="btn btn-outline-success">
                            <p><?= $todo_afaire['title'] ?></p>
                        </a> <br>
                        <select class="form-select">
                            <option selected>A faire</option>
                            <option value="2">
                                <a href="index.php">hello</a>
                            </option>
                            <option value="3">Fait</option>
                        </select> <br><br>
                    <?php } ?>
                </div>

            </div>
        </div>



    </div>

    <footer>
        <p>© 2023 tout droit réservé</p>
    </footer>
</div>


<?php require("includes/footer.php") ?>