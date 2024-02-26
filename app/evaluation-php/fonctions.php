<?php declare(strict_types=1);
/**
 * FICHIER A COMPLETER DANS LES ESPACES INDIQUES (ET PAS AILLEURS ! ! !)
 */
/**
 * AJOUTER LE CODE MANQUANT!
 */
 
function routingPage(Array $pGetRecieved):String
{
   if (isset($pGetRecieved['page'])&&($pGetRecieved['page']=='list'))
   return 'list';
   if (isset($pGetRecieved['page'])&&($pGetRecieved['page']=='details'))
   return 'details';
   // if (isset($pGetRecieved['page'])) ne passe pas le test (page inconnue)
   // return $pGetRecieved['page'];
  return "home";
}

function getParamSearch($pGetRecieved)
{
// si pGetRecieved contient un tableau vide alors retourner ''
if (empty($pGetRecieved)) 
{
   return '';
} 
else 
{
   return $pGetRecieved['nom'];
}
}
function getParamDetail($pGetRecieved)
{
   /**
 * AJOUTER LE CODE MANQUANT!
 */
}
function showPage(String $pTemplate,$data = [])
{
    /**
 * NE PAS TOUCHER LE CODE ICI
 */
    if (!file_exists($pTemplate))
        throw new ParseError('file not found');
    ob_start();
    include $pTemplate;
    return  ob_get_clean();
        /**
     * NE PAS TOUCHER LE CODE ICI
     */
}
