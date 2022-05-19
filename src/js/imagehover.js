'use strict';
// fonction : affichage d'une image dans un div
function ShowBigImage(divId,imageRepNom,imageLegende){
  // divId : id du div qui va contenir la grande image
  // imageNom : chemin + nom de la grande image
  // on met l'image dans le div
  document.getElementById(divId).innerHTML = '<img src="'+imageRepNom+'" alt="" />';
  document.getElementById(divId+'-legende').textContent = imageLegende;
}	
// fonction : vidage du contenu d'un div
function HideBigImage(divId){
  // divId : id du div à vider
  document.getElementById(divId).innerHTML = ''; // on vide le div
  document.getElementById(divId+'-legende').textContent = ''; // on vide le div
}


