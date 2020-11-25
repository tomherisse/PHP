<h2>Connexion</h2>
<?php echo validation_errors();?>
<?php echo form_open('jeux/index')?>
<!--
<form id="monlogin" method="post" action="/jeux/moncompte/">
    <label for="nomj">Identifiant</label><input type="input" name="nomj" /><br/>
    <label for="mdpj">Mot de passe</label><input type="input" name="mdpj" /><br/>
    <input type="submit" name="submit" value="Connexion" />
</form>
-->
<form id="monlogin" method="post" action="baseurl('jeux/moncompte')">
    <label for="nomj">Identifiant</label><input type="input" name="identifiant" /><br/>
    <label for="mdpj">Mot de passe</label><input type="input" name="motdepasse" /><br/>
    <input type="submit" name="submit" value="Connexion" />
</form>
