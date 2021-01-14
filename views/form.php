<form method="POST">
    <div class="container">
        <div class="row">
            <div class="col-12">
            <!-- select de civilité  -->
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text bg-danger text-light" for="inputGroupSelect01">Civilité</label>
                    </div>
                    <select class="custom-select bg-dark text-light" name="gender" id="inputGroupSelect01">
                        <option value="">civilité</option>
                        <option <?= (!empty($gender) && $gender == 'Homme') ? 'selected': '' ?> value="Homme">Homme
                        </option>
                        <option <?= (!empty($gender) && $gender == 'Femme') ? 'selected': '' ?> value="Femme">Femme
                        </option>
                        <option <?= (!empty($gender) && $gender == 'GreyMan') ? 'selected': '' ?> value="GreyMan">
                            GreyMan
                        </option>
                    </select>
                </div>
                <p class="text-danger"><?= $errorList['gender'] ?? '' ?></p>
                <!-- input pour le nom  -->
                <div class="input-group flex-nowrap">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-danger text-light" id="addon-wrapping">Nom</span>
                    </div>
                    <input type="text" 
                            name="name" 
                            value="<?= $name ?? '' ?>" 
                            class="form-control bg-dark text-light"
                            aria-label="Name"
                            aria-describedby="addon-wrapping"
                            title="Vous avez des chiffres dans votre nom vous ?"
                            pattern="^[a-zA-Z ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ-]{2,}$"
                            required>
                </div>
                <p class="text-danger"><?= $errorList['name'] ?? '' ?></p>

                <!-- input du prenom -->
                <div class="input-group flex-nowrap">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-danger text-light" id="addon-wrapping">Prenom</span>
                    </div>
                    <input type="text" 
                            name="firstname" 
                            value="<?= $firstname ?? '' ?>" 
                            class="form-control bg-dark text-light"
                            aria-label="firstname"
                            aria-describedby="addon-wrapping"
                            title="Vous avez des chiffres dans votre prenom vous ?"
                            pattern="^[a-zA-Z ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ-]{2,}$"
                            required>
                </div>
                <p class="text-danger"><?= $errorList['firstname'] ?? '' ?></p>

                <!-- input de l'age  -->
                <div class="input-group flex-nowrap">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-danger text-light" id="addon-wrapping">Age</span>
                    </div>
                    <input type="number" 
                            name="age" 
                            value="<?= $age ?? '' ?>" 
                            class="form-control bg-dark text-light"
                            aria-label="age"
                            aria-describedby="addon-wrapping"
                            title="Vous avez des lettres dans votre age vous ?"
                            pattern="^[0-9]{1,3}"
                            required>
                </div>
                <p class="text-danger"><?= $errorList['age'] ?? '' ?></p>

                <!-- input de la societe  -->
                <div class="input-group flex-nowrap">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-danger text-light" id="addon-wrapping">Société</span>
                    </div>
                    <input type="text" 
                            name="company" 
                            value="<?= $company ?? '' ?>" 
                            class="form-control bg-dark text-light"
                            aria-label="company"
                            aria-describedby="addon-wrapping"
                            title="Vous avez des lettres dans votre company vous ?"
                            pattern="^[a-zA-Z0-9 ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ-]{2,}$"
                            required>
                </div>
                <p class="text-danger"><?= $errorList['company'] ?? '' ?></p>
                <!-- bouton submit  -->
                <button class="btn btn-danger" type="submit">Envoyer !</button>
            </div>
        </div>
    </div>
</form>