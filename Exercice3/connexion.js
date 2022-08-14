/* Fonction qui vérifie si l'ensembles des informations ont été remplies dans le formulaire */
function verifierFormulaire() {
  var login = document.getElementById("login").value;
  var mdp = document.getElementById("mdp").value;
  // on vérifie qu'aucun champ n'est vide
  if(login != ""  &&  mdp != ""){
    // le formulaire est valide, on fait apparaître le bouton "valider"
    document.getElementById("boutonValider").setAttribute("style", "");
  }else{
    // au moins un champ est vide, on cache le bouton
    document.getElementById("boutonValider").setAttribute("style", "visibility: hidden;");
  }
}
