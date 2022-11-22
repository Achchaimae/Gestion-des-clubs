<?php
require_once PROJ_DIR . "/views/header.php";

?>

<div class="main-container">
        <form action="?c=Clubs&a=createNewClub" method="post" name="newClub">
            <label for="nom">Nom du club:</label>
            <input type="text" name="nom">
            <label for="description">description :</label>
            <input type="text" name="description">
            <label for="datecreation">date de creation :</label>
            <input type="text" name="datecreation">
            <input type="file" id="myFile" name="logo">
            <button type="submit">submit</button>
        </form>
    </div>

<?php
require_once PROJ_DIR . "/views/footer.php";
?>