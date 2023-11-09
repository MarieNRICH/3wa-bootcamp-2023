//Exercice 1

let nom = "Martin";
let anneeNaissance = "2000";
//Afficher année actuelle//
// let anneeDate = new Date();
// let date = anneeDate.getFullYear();
let date = 2022;
let age = date - anneeNaissance;

console.log("Bonjour Mr " + nom + ", vous avez " + age + " ans!");
// console.log(`Bonjour Mr ${nom}, vous avez ${ age } ans!`);

//Exercice 2

let note_maths = 15;
let note_francais = 12;
let note_HG = 9;
let moyenne = (note_maths + note_francais + note_HG) / 3;

console.log("La moyenne est de " + moyenne + "/20.")

//Exercice 3

let sexe = "homme";

if (sexe == "homme") {
    console.log("Vous êtes un homme.")
} else {
    console.log("Vous êtes une femme.")
}

//Exercice 4

//Création fonction pour créer un nombre aléatoire entre 0 et 24
function getRandomInt(min, max) {

    return Math.floor(Math.random() * (max - min)) + min;


}

let nb = getRandomInt(0, 24);

if ((nb > 21) || (nb <= 6)) {
    console.log("C'est la nuit");
} else if ((nb > 6) && (nb < 12)) {
    console.log("C'est le matin");
} else {
    console.log("C'est l'après midi");
}

//Exercice 5

const choix = getRandomInt(1, 4);

switch (choix) {
    case 1:
        console.log("Insérer");
        break;

    case 2:
        console.log("Supprimer");
        break;

    case 3:
        console.log("Afficher");
        break;


    default:
        console.log("Ce choix n'existe pas");
        break;
}

//Exercice 6

let multiple = getRandomInt(1, 1000);
if ((multiple % 3 == 0) && (multiple % 5 == 0)) {
    console.log(multiple + " est multiple de 3 et 5");
} else {
    console.log(multiple + " n'est pas multiple de 3 et 5");
}

//Exercice 7

for (let i = 4400; i < 4500; i++) {
    console.log(i + "0");

}



//Exercice 8

//Voir index.html//


//Exercice 9



do {
    var nombre1 = getRandomInt(1, 9);
    var nombre2 = getRandomInt(1, 9);
    var nombre3 = getRandomInt(1, 9);
    console.log(nombre1 + ',' + nombre2 + ',' + nombre3);

} while ((nombre1 % 2 != 0) || (nombre2 % 2 == 0) || (nombre3 % 2 == 0));




//Exercice 10

var lucky = 777;
var luckyWin = 0;


for (var essais = 0; luckyWin != lucky; essais++) {
    luckyWin = getRandomInt(100, 999);
    //console.log(luckyWin);

}
console.log(essais);

// while (luckyWin != lucky) {
//     luckyWin = getRandomInt(100, 999);
//     essais++;
// }
// console.log(essais);

//Exercice 11

var dateToday = new Date();
console.log(dateToday);
//Je définis l'année//
var annee = dateToday.getFullYear();
var mois = dateToday.getMonth() + 1;
if (mois < 10) {
    mois = "0" + mois;
};


var jour = dateToday.getDate();
var heure = dateToday.getHours();
var minute = dateToday.getMinutes();
if (minute < 10) {
    minute = "0" + dateToday.getMinutes();
};
var seconde = dateToday.getSeconds();

console.log("Nous sommes le " + jour + "/" + mois + "/" + annee + " et il est " + heure + "h" + minute + " et " + seconde + " secondes.");