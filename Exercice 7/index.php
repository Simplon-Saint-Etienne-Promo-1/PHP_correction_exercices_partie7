<?php
if (isset($_POST['firstname']) && isset($_POST['lastname']) 
|| isset($_GET['firstname']) && isset($_GET['lastname'])) 
{
    
    $file = $_FILES['file'];

    $fileName = $file['name'];
    $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);

    echo "Civilité : " . $_POST['civility'];
    echo "Prénom : " . $_POST['firstname'];
    echo "Nom : " . $_POST['lastname'];
    echo "Nom du fichier : " . $filename . "<br>";
    echo "Extension du fichier : " . $fileExtension . "<br>";


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
        <label for="file">Nom :</label>
        <input type="file" name="file" id="file">
        <br>
        <input type="submit" value="Envoyer">
    </form>
    <?php
}
?>
