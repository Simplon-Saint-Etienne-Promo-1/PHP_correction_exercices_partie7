<?php
if (isset($_POST['firstname']) && isset($_POST['lastname']) 
|| isset($_GET['firstname']) && isset($_GET['lastname'])) 
{
    echo "Civilité : " . $_POST['civility'];
    echo "Prénom : " . $_POST['firstname'];
    echo "Nom : " . $_POST['lastname'];

} else {
?>
    <form action="index.php" method="POST">
        <label for="civilite">Civilité :</label>
        <select name="civilite" id="civilite">
            <option value="mr">Mr</option>
            <option value="mme">Mme</option>
        </select>
        <br>
        <label for="firstname">Prénom :</label>
        <input type="text" name="firstname" id="firstname">
        <br>
        <label for="lastname">Nom :</label>
        <input type="text" name="lastname" id="lastname">
        <br>
        <input type="submit" value="Envoyer">
    </form>
    <?php
}
?>
