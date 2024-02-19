<!DOCTYPE html>
<html lang="fr-FR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Formulaire</title>
</head>

<body>
  <form action="reponse.php" method="post">
  
    <div class="form-group">
      <label for="civ"></label>
      <select name="civ" id="civ">
        <option value="M.">M.</option>
        <option value="Mme">Mme</option>
      </select>
    </div>
    <div class="form-group">
      <label for="nom">Nom :</label>
      <input type="text" id="nom" name="nom">
    </div>
    <div class="form-group">
      <label for="prenom">Prenom :</label>
      <input type="text" id="prenom" name="prenom">
    </div>
    <div class="form-group">
      <label for="age">Votre année de naissance :</label>
      <input type="text" id="age" name="age">
    </div>
    <div class="form-group">
      <label for="id">Donnez un identifiant :</label>
      <input type="text" id="id" name="id">
    </div>
    <div class="form-group">
      <label for="mdp">Donnez un mot de passe :</label>
      <input type="text" id="mdp" name="mdp">
    </div>
    <div class="form-group">
      <label for="sexe">Genre :</label>
      <input type="radio" id="masculin" name="genre" value="masculin" checked>
      <label for="masculin">Masculin</label>
      <input type="radio" id="feminin" name="genre" value="feminin" checked>
      <label for="feminin">Féminin</label>
      <input type="radio" id="autre" name="genre" value="autre" checked>
      <label for="feminin">Autre</label>
    </div>
    <div class="form-group">
      <label for="debut">Je débute en PHP</label>
      <input type="checkbox" id="debut" name="debut">
    </div>
    <button type="submit">Valider</button>
  </form>

</body>

</html>