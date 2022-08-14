/* Fonction qui vérifie si l'ensembles des informations ont été remplies dans le formulaire */
function verifierFormulaire() {
  var estValide = 1;
  // on vérifie qu'aucun champ n'est vide
  for(i=0; i<=10; i++){
    var valeur = document.getElementById(i).value;
    if(valeur == ""){
      estValide = 0;
    }
  }
  if(estValide == 1){
    // le formulaire est valide, on fait apparaître le bouton "valider"
    document.getElementById("boutonValider").setAttribute("style", "");
  }else{
    // au moins un champ est vide, on cache le bouton
    document.getElementById("boutonValider").setAttribute("style", "visibility: hidden;");
  }
}
