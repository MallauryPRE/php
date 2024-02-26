<!-- MISE EN FORME UNIQUEMENT!
NE PAS TOUCHER LE PHP -->
<main>
    <ul>
    <?php
    foreach ($data['personnes'] as $key => $personne) {?>
        <li><?=$personne->prenom?> <?=$personne->nom?> <?=$personne->date->format('d-m-Y')?><a href="index.php?page=details&id=<?=$key?>"> details</a></li>
    <?php 
    }?>
    </ul>
</main>