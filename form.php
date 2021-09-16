
<div class="ml-5">
    <p> Choisis ta plateforme pour afficher seulement les jeux qui t'intéressent ! </p>
    <form action="index.php" method="post"  class="form-check ml-5">
        <input type="radio" id="PS2" name="console" value="PS2" class="form-check-input">
        <label for="PS2" class="text-primary"><strong>PS2</strong></label>
        <input type="radio" id="Xbox" name="console" value="Xbox">
        <label for="Xbox" class="text-primary"><strong>Xbox</strong></label>
        <input type="radio" id="PC" name="console" value="PC">
        <label for="PC" class="text-primary"><strong>PC</strong></label> <br>
        <input type="submit" value="GO" class="btn btn-primary ml-4" >
    </form>
</div>

<?php include('all_games.php');