<!-- MISE EN FORME UNIQUEMENT!
NE PAS TOUCHER LE PHP -->
<main>
    <div><?=$data['personne']->prenom?> <?=$data['personne']->nom?><?=$data['personne']->date->format('d-m-Y')?></div>
<p>
<?=$data['personne']->resume?></p>

</main>