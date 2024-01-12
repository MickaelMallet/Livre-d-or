<?php 
if (isset($_POST['username'], $_POST['message'])) {
    
}
$title = "Livre d'or";
require 'elements/header.php';
?>

<div class="container">
    <h1>Livre d'or</h1>
    <form action="" method="post">
        <div class="form-group">
            <input type="text" name="username" placeholder="Votre pseudo">
        </div>
        <div class="form-group">
            <textarea name="username" placeholder="Votre pseudo"></textarea>
        </div>
        <button class="btn btn-primary">Envoyer</button>
    </form>
</div>

<?php require 'elements/footer.php';