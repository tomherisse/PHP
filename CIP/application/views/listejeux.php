<h2>
    <?php echo $title ?>
</h2>
<ul>
<li><a href="<?php echo site_url('jeux/liste')?>">Liste</a></li><li><a href="<?php echo site_url('jeux/index')?>">Connexion</a></li><li>Se Deconnecter</li>
</ul>
<ul>

    <?php foreach($jeux as $jeu):?>
    <li>
        <tr>
            <td><img src="<?php echo $jeu['couverture'] ?>" height="100 px"></td>
            <td><?php echo $jeu['guid']; ?></td>
            <td><?php echo $jeu['titre']; ?></td>
            <td><?php echo $jeu['sortie']; ?></td>
            <td><?php echo $jeu['description']; ?></td>
            <td><a href="<?php echo site_url('jeux/ajouter_collection?jeu_id=').$jeu["id"];?>">Ajouter à ma collection</a></td>
        </tr>
    </li>
    <?php endforeach ?>

</ul>
<!--
?php //echo "<li >".$student['student'].": ".$student['lastname']."".$student['firstname'].", ".$student['email']."</li >";?>
?php //echo "<li> ".$_jeu['titre'].": ".$_jeu['sortie']."".$_jeu['description'].", ".$_jeu['couverture']." - ".anchor('jeux/delete/'.$_jeu["titre"],'[del]');?>
?php echo "<li> ".$_collectionne['id'].anchor('jeux/delete/'.$_collectionne["id"],'[del]');?> 
-->
