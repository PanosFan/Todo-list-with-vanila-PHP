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

<!-- update todo -->
<?php
if (isset($_POST["updateTodoBTN"])) {
    updateTodo($_POST['updated'], $_POST["dltid"]);
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
            <input type="text" name="updated" class="updateInput">
            <button type="submit" name="updateTodoBTN" class="submitUpdateBTN">Update</button>
            <button type="submit" name="deleteTodoBTN">Delete</button>
        </form>
    </div>
    <?php endforeach; ?>
</div>



<!-- <div class=" bg-modal">
                <div class="modal-contents">
                    <div class="close">+</div>
                    <form action="">
                        <input type="text" placeholder="Name">
                        <button type="submit">Submit</button>
                    </form>
                </div>
    </div> -->

<?php require_once './footer.php'; ?>