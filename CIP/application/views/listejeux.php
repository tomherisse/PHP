<h2>
    <?php echo $title ?>
</h2>
<ul>
    <?php foreach($listejeux as $_collectionne):?>
    <?php //echo "<li >".$student['student'].": ".$student['lastname']."".$student['firstname'].", ".$student['email']."</li >";?>
    <?php //echo "<li> ".$_jeu['titre'].": ".$_jeu['sortie']."".$_jeu['description'].", ".$_jeu['couverture']." - ".anchor('jeux/delete/'.$_jeu["titre"],'[del]');?>
    <?php echo "<li> ".$_collectionne['id'].anchor('jeux/delete/'.$_collectionne["id"],'[del]');?>
    </li>
    <?php endforeach ?>
</ul>
