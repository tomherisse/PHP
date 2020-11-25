<h2>Inscription</h2>
<?php echo validation_errors();?>
<?php echo form_open('jeux/index')?>
<form>
    <label for="identifiant">Identifiant</label>
    <input type="input" name="identifiant" /><br/>
    <label for="nom">Nom</label>
    <input type="input" name="nom" /><br/>
    <label for="prenom">Prenom</label>
    <input type="input" name="prenom" /><br/>
    <label for="motdepasse">Mot de Passe</label>
    <input type="input" name="motdepasse" /><br/>
    <label for="vmotdepasse">Vérification mot de Passe</label>
    <input type="input" name="vmotdepasse" /><br/>
    <input type="submit" name="submit" value="Inscription" />
</form>
