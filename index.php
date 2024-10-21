<form method="POST" action="controller/addEtudiant.php" enctype="multipart/form-data">
    <fieldset>
        <legend>Ajouter un nouveau étudiant</legend>
        <table border="0">
            <tr>
                <td>Nom : </td>
                <td><input type="text" name="nom" value="" /></td>
            </tr>
            <tr>
                <td>Prenom :</td>
                <td><input type="text" name="prenom" value="" /></td>
            </tr>
            <tr>
                <td>Ville</td>
                <td>
                    <select name="ville">
                        <option value="Marrakech">Marrakech</option>
                        <option value="Rabat">Rabat</option>
                        <option value="Agadir">Agadir</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Sexe </td>
                <td>
                    M<input type="radio" name="sexe" value="homme" />
                    F<input type="radio" name="sexe" value="femme" />
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Envoyer" />
                    <input type="reset" value="Effacer" />
                </td>
            </tr>
        </table>
    </fieldset>
</form>