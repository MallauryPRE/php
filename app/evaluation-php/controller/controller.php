<?php

function homePage() {
   
    $listePersonnes = ListePersonnes::getListePersonnes('json/personnes.json');
    $data['nb_personnes']= count($listePersonnes->liste);
    $nav=showPage("templates/home/nav-template.php");
    $main=showPage("templates/home/main-template.php",$data);
    return ['nav'=>$nav,'main'=> $main];
}
function listerPage(String $param) {

    $listePersonnes = ListePersonnes::getListePersonnes('json/personnes.json');
    if ($param=='')
        $data['personnes']= $listePersonnes->liste;
    else
        $data['personnes']= $listePersonnes->findByName($param);
    $nav=showPage("templates/list/nav-template.php");
    $main=showPage("templates/list/main-template.php",$data);
    return ['nav'=>$nav,'main'=> $main];
}
function detailsPage(String $param) {

    $listePersonnes = ListePersonnes::getListePersonnes('json/personnes.json');

        $data['personne']= $listePersonnes->findById($param);
    $nav=showPage("templates/details/nav-template.php");
    $main=showPage("templates/details/main-template.php",$data);
    return ['nav'=>$nav,'main'=> $main];
}