<?php require_once './dbh.php' ?>
<?php require_once './header.php' ?>
<?php require_once './functions.php' ?>

<!-- add todos function-->
<?php
if (isset($_POST["submitTodoBTN"])) {
    addTodo($_POST['description']);
}
?>

<!-- delete todos function-->
<?php
if (isset($_POST["deleteTodoBTN"])) {
    deleteTodo($_POST["dltid"]);
}
?>

<!-- get todos function-->
<?php $todos = getTodo(); ?>


<!-- add todo Form -->
<main class="container">
    <form action="" method="post">
        <input type="text" name="description">
        <button type="submit" name="submitTodoBTN">Add todo</button>
    </form>
</main>

<!-- show todo -->
<div class="container">
    <?php foreach ($todos as $todo) : ?>
    <div>
        <?= $todo->description; ?>
        <form action="" method="post" id="deletefrm">
            <input type="hidden" name="dltid" value="<?= $todo->id; ?>">
            <button type="submit" name="deleteTodoBTN">Delete</button>
        </form>
    </div>
    <?php endforeach; ?>
</div>

<?php require_once './footer.php'; ?>