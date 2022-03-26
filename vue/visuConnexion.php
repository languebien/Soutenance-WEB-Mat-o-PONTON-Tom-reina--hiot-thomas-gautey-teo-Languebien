        <div class = "Pizza">
            <p class = "Titre">Connexion</p>
            <form id = "Connexion" method = "POST" action = "./controleur/controleurConnexion.php"> <!-- MODIFIER -->
                <table id = "TableConnexion">
                    <tr>
                        <td><label class = "Texte" for = "">Email de connexion :</label></td>
                        <td><input class = "Input" name = "mailU" type = "text" value = "" required></td>
                    </tr>
                    <tr>
                        <td><label class = "Texte" for = "">Mot de Passe :</label></td>
                        <td><input class = "Input" name = "mdpU" type="password" required></td>
                    </tr>
                </table>
                <input type = "submit" class = "Bouton" value = "Connexion" name = "Connexion">
            </form>
        </div>
