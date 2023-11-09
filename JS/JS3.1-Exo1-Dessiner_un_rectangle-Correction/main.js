'use strict';

document.addEventListener('DOMContentLoaded',function(){

    // L'objet du DOM Canvas
    let canvasDom = document.querySelector('#canvas');

    // Le context utilisé avec Canvas qui donne accès aux librairies de manipulation 2D
    let ctx = canvasDom.getContext('2d');

    // On trace le contour (stroke) d'un rectangle
    ctx.strokeRect(50, 50, 200, 150);

    // On dit au contexte que la coleur de contour (stroke) est rouge
    ctx.strokeStyle = "#FF00DD";

    // On trace un nouveau rectangle avec cette couleur de contour
    ctx.strokeRect(50, 205, 200, 150);

    // On dit au contexte que la couleur de remplissage est rouge
    ctx.fillStyle = "#FF0000";

    // On trace un nouveau rectangle rempli (fill) avec cette couleur (mais il n'a pas de contour)
    ctx.fillRect(255, 205, 200, 150);
   
});