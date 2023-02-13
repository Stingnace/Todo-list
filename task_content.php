<?php require("includes/header.php");
require("actions/function.php");
$req = $bdd->prepare('SELECT * FROM todo WHERE id = ?');
$req->execute([$_GET['id']]);
$todo = $req->fetch();

?>
<div class="super-container">
    <header>
        <div class="logo">Ma Todo</div>
    </header>
    <div class="content_task">

        <div class="container_task">
            <h1><?= $todo['title'] ?></h1>
            <p><?= $todo['description'] ?></p>
        </div>


    </div>

    <footer>
        <p>© 2023 tout droit réservé</p>
    </footer>
</div>






<?php require("includes/footer.php") ?>