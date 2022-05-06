        <div class = "Pizza">
            <p class = "TitreInfo">Connexion</p>
            <form id = "FormulaireConnexion" method = "POST" action = "./?action=connexion">
                <div id = "Connexion">

                    <div class = "Connexion_Login">
                        <label class = "Texte" for = "">Email de connexion :</label>
                        <input class = "Input" name = "mailU" type = "text" value = "" required>
                    </div>

                    <div class = "Connexion_Pass">
                        <label class = "Texte" for = "">Mot de Passe :</label>
                        <input class = "Input" name = "mdpU" type="password" required>
                    </div>

                    <input type = "submit" class = "Bouton" value = "Connexion" name = "Connexion">

                </div>
                <div class = "Config">
                    <p class = "ConfigText">Utilisateur de test : <br/>
                        login : test@bts.sio<br/>
                        mot de passe : sio</p>
                </div>
                <div class = "Config">
                    <p class = "ConfigText">Administrateur de test : <br/>
                        login : contact@pizzaunlimited.online<br/>
                        mot de passe : pizza</p>
                </div>
            </form>

            <p class = "TitreInfo">Créer un compte</p>
            <form id = "FormulaireInscription" method = "POST" action = "./?action=inscription">
                <div id = "Inscription">

                    <div class = "Inscription_Pseudo">
                        <label class = "Texte" for = "">Pseudo :</label>
                        <input class = "Input" name = "InscPseudo" type = "text" value = "" required>
                    </div>

                    <div class = "Inscription_Mail">
                        <label class = "Texte" for = "">Email :</label>
                        <input class = "Input" name = "InscMail" type = "text" value = "" required>
                    </div>

                    <div class = "Inscription_Pass">
                        <label class = "Texte" for = "">Mot de Passe :</label>
                        <input class = "Input" name = "InscMdp" type="password" required>
                    </div>

                    <input type = "submit" class = "Bouton" value = "Inscription" name = "Inscription">

                </div>
            </form>
            <div class = "ConfigInscr">
                <p class = "ConfigText"><?php echo $Ok; ?></p>
            </div>
        </div>

 
