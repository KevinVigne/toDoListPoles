
<?php
require_once(__DIR__ . "/partials/head.view.php");
?>
<h1 class="text-center text-warning fw-bold m-2">Bienvenue</h1>
<div class="container-fluid d-flex justify-content-between">
    <div class="container d-flex justify-content-center flex-column align-self-start">
        <h2>Taches Urgentes :</h2>
        <?php
        if (!empty($tasksUrgent)) {
            foreach ($tasksUrgent as $task) {
        ?>
                <div class="card border-danger my-3" style="width: 18rem;">
                    <div class="card-body text-danger">
                        <h3 class="card-title"><?= $task->getTitle() ?></h3>
                        <span class="badge rounded-pill text-bg-danger"><?= $task->getStatus() ?></span>
                        <p class="card-text"><?= $task->getDescription() ?></p>
                        <a href="/tache?id=<?= $task->getId() ?>" class="btn btn-outline-primary">voir +</a>
                        <form action="" method="post">
                            <input type="hidden" value="<?= $task->getId() ?>" name="id">
                            <button type="submit" class="btn btn-outline-success mt-2" name="editStatus">Terminer</button>
                        </form>
                    </div>
                </div>
        <?php
            }
        } else {
            echo "<p>Vous n'avez pas de tâche urgente !</p>";
        }
        ?>
    </div>
    <div class="container d-flex justify-content-center flex-column align-self-start">
        <h2>Taches à faire :</h2>
        <?php
        if(!empty($tasksToDo)) {
            foreach($tasksToDo as $task){
                ?>
                <div class="card border-warning my-3" style="width: 18rem;">
                    <div class="card-body text-warning">
                        <h3 class="card-title"><?= $task->getTitle() ?></h3>
                        <span class="badge rounded-pill text-bg-warning"><?= $task->getStatus() ?></span>
                        <p class="card-text"><?= $task->getDescription() ?></p>
                        <a href="/tache?id=<?= $task->getId() ?>" class="btn btn-outline-primary">voir +</a>
                        <form action="" method="post">
                            <input type="hidden" value="<?= $task->getId() ?>" name="id">
                            <button type="submit" class="btn btn-outline-success mt-2" name="editStatus">Terminer</button>
                        </form>
                    </div>
                </div>
        <?php
            }
        } else {
            echo "<p>Vous n'avez pas de tâche à faire !</p>";
        }
        ?>
    </div>
    <div class="container d-flex justify-content-center flex-column align-self-start">
        <h2>Taches en cour :</h2>
        <?php
        if(!empty($tasksWip)) {
            foreach($tasksWip as $task){
                ?>
                <div class="card border-info my-3" style="width: 18rem;">
                    <div class="card-body text-info">
                        <h3 class="card-title"><?= $task->getTitle() ?></h3>
                        <span class="badge rounded-pill text-bg-info"><?= $task->getStatus() ?></span>
                        <p class="card-text"><?= $task->getDescription() ?></p>
                        <a href="/tache?id=<?= $task->getId() ?>" class="btn btn-outline-primary">voir +</a>
                        <form action="" method="post">
                            <input type="hidden" value="<?= $task->getId() ?>" name="id">
                            <button type="submit" class="btn btn-outline-success mt-2" name="editStatus">Terminer</button>
                        </form>
                    </div>
                </div>
        <?php
            }
        } else {
            echo "<p>Vous n'avez pas de tâche à en cours !</p>";
        }
        ?>
    </div>

    <div class="container d-flex justify-content-center flex-column align-items-start">
        <h2>Taches terminée :</h2>
        <?php
        if(!empty($tasksDone)) {
            foreach($tasksDone as $task){
                ?>
                <div class="card border-success my-3" style="width: 18rem;">
                    <div class="card-body text-success">
                        <h3 class="card-title"><?= $task->getTitle() ?></h3>
                        <span class="badge rounded-pill text-bg-success"><?= $task->getStatus() ?></span>
                        <p class="card-text"><?= $task->getDescription() ?></p>
                        <a href="/tache?id=<?= $task->getId() ?>" class="btn btn-outline-primary">voir +</a>
                        <form action="" method="post">
                            <input type="hidden" value="<?= $task->getId() ?>" name="id">
                            <button type="submit" class="btn btn-outline-success mt-2" name="editStatus">Terminer</button>
                        </form>
                    </div>
                </div>
        <?php
            }
        } else {
            echo "<p>Vous n'avez pas de tâche à terminée !</p>";
        }
        ?>
    </div>

</div>

<?php
require_once(__DIR__ . "/partials/footer.view.php");
?>
