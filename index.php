<?php require("includes/header.php") ?>
<div class="super-container">
    <header>
        <div class="logo">Ma Todo</div>
    </header>
    <div class="content">
        <div class="todo-container">
            <h1>Ma todo</h1>
            <p></p>
            <div class="todo-form">
                <form action="actions/form_back.php" method="POST">
                    <div titre><label for="title">Titre : </label> <br>
                        <input type="text" name="title">
                    </div> <br>

                    <div class="validate">
                        <button type="submit" name="validate">Valider</button>

                    </div>
                </form>
            </div>
            <div class="task"><a href="task.php"><button type="button" class="btn btn-primary">voir toutes les tâches</button></a></div>
        </div>

    </div>

    <footer>
        <p>© 2023 tout droit réservé</p>
    </footer>
</div>

<?php require("includes/footer.php") ?>