
<?php
require_once(__DIR__ . "/partials/head.view.php");
?>
<h1 class="text-center text-warning fw-bold m-2">Ma tache</h1>


<p><?= $myTask->getDescription() ?></p>



<div class="card border-info mb-3" >
    <div class="card-header bg-transparent border-success">
        <h2><?= $myTask->getTitle() ?></h2>
    </div>
  <div class="card-body text-danger">
    <p class ="card-title"><?= $myTask->getStatus() ?></p>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <div class="card-footer bg-transparent border-success">
    <p><?= $myTask->getCreationDate() ?></p>
    <p><?= $myTask->getModificationDate() ?></p>
    <div class="d-flex flex-row justify-content-evenly">
        <a href="/modifier?id=<?= $myTask->getId() ?>" class="btn btn-outline-warning mt-2 mx-4">Modifier</a>
        <form action="/supprimer?id=<?= $myTask->getId() ?>" method="post">
            <input type="hidden" value="<?= $myTask->getId() ?>" name="id">
            <button class="btn btn-outline-danger mt-2 mx-4" name="delete" type="submit">Supprimer</button>
        </form>
    </div>
  </div>
</div>
<?php
require_once(__DIR__ . "/partials/footer.view.php");
?>
