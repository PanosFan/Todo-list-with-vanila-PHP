<?php require_once './dbh.php' ?>
<?php require_once './header.php' ?>
<?php require_once './functions.php' ?>

<!-- add todos -->
<?php
if (isset($_POST["submitTodoBTN"])) {
    addTodo($_POST['description']);
}
?>

<!-- delete todos -->
<?php
if (isset($_POST["deleteTodoBTN"])) {
    deleteTodo($_POST["dltid"]);
}
?>

<!-- update todo -->
<?php
if (isset($_POST["updateTodoBTN"])) {
    updateTodo($_POST['updated'], $_POST["dltid"]);
}
?>

<!-- get todos function -->
<?php $todos = getTodo(); ?>


<!-- add todo Form -->
<main class="container">
    <div>
        <form action="" method="post">
            <input type="text" name="description" required>
            <button type="submit" name="submitTodoBTN">Add todo</button>
        </form>

        <!-- show todo -->
        <?php foreach ($todos as $todo) : ?>
        <?= $todo->description; ?>
        <form action="" method="post" id="deletefrm">
            <input type="hidden" name="dltid" value="<?= $todo->id; ?>">
            <input type="text" name="updated" class="updateInput">
            <button type="submit" name="updateTodoBTN" class="submitUpdateBTN">Update</button>
            <button type="submit" name="deleteTodoBTN">Delete</button>
        </form>
        <?php endforeach; ?>

    </div>
</main>

<?php require_once './footer.php'; ?>