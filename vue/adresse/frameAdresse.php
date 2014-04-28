
<div id="vueAdresse" name=vueAdresse>
    <form id="adresse" name="adresse" method="GET" action="../../modele/traitement/class.AdresseTraitement.php">
        <fieldset>

            <legend>ADRESSE <?=$sujet ?></legend>
            
            <label for="no_civic">no_civic<span class="requis">*</span></label>
            <input type="text" id="no_civic"
                   name="no_civic"  size="20" maxlength="20" 
                   value ='<?=$adresse->getNo_civic(); ?>'/><br />
            
            <label for="rue">Rue<span class="requis">*</span></label>
            <input type="text" id="rue"
                   name="rue"  size="20" maxlength="20" 
                   value = "<?=$adresse->getRue();?>"/><br />
            
            <label for="ville">Ville<span class="requis">*</span></label>
            <input type="select" id="ville"
                   name="ville"  size="20" maxlength="20" 
                   value = "<?=$adresse->getVille();?>"/> <br />
            
            <label for="code postal">code postal<span class="requis">*</span></label>
            <input type="text" id="code postal"
                   name="code postal"  size="20" maxlength="20" 
                   value = "<?=$adresse->getCode_postal();?> "/><br />
            
            <label for="province">province<span class="requis">*</span></label>
            <select id="province" name="province">
                 <?php foreach ($provinces as $province): ?>
                    <option value="<?= $province['code'] ?>" ><?= $province['nom'] ?></option>
                 <?php endforeach; ?>
            </select><br />

            


        </fieldset>
        <input type="submit" value="ajouter" />
        <input type="button" value="Modifier" />
        <input type="reset" value="Supprimer" /> <br/>

    </form>
    <div id="message">
        <?= $message ?>
    </div>
    <div>
