// Exo 1 //

var nom ="Martin";
var anneeNaissance = 2000;
console.log("Bonjour Mr, " +nom+ " vous avez " +anneeNaissance+" ans!");

var date = 2023;
var age = date - anneeNaissance;
console.log(age);

// Exo 2 //

var note_maths = 15;
var note_francais = 12;
var note_HG = 9;
var la_moyenne = (note_HG + note_francais + note_maths) / 3;
console.log("La moyenne est de "+la_moyenne+"/20");

// Exo 3 //
var sex ="Femme";
/* Votre condition if/else ici */
if (sex=="Femme")
{
	console.log ("Vous êtes une "+sex);
} else {
	console.log ("Vous n'êtes pas une " +sex);
}
 
// Exo 4 //

var heure = 1;

if (heure > 0 && heure <= 12)
{
	console.log("C'est le Matin");
} 
else if (heure > 12 && heure <= 18)
{
	console.log("C'est le Midi");
}
else
{
	console.log("C'est le Soir");
}

// Exo 5 //
var choice = 5;

switch(choice) {
  case 1:
    console.log("Insérer");
    // code block
    break;
  case 2:
  	console.log("Supprimer");
    // code block
    break;
  case 3:
  	console.log("Supprimer");
    // code block
    break;
   case 4:
  	console.log("Ce choix n'existe pas");
    // code block
    break;
  default:
    // code block
    console.log("Larguée la Mome !")
}

// Exo 6 //
var var1 = 35;
var var2 = 15;
var result = var2 % var1;

if (result%3==0  && result%5==0)
{
	console.log("C'est une multiplee de 3");
} 
else
{
	console.log("C'est une multiplee de 5");
}


// Exo 7//

// Exo 8 //





