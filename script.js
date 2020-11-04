"use strict"

let card = document.querySelectorAll(".multiplication__card");

for(let element of card) {
    var x = Math.floor(Math.random() * 256);
    var y = Math.floor(Math.random() * 256);
    var z = Math.floor(Math.random() * 256);
    var color = Math.round(((parseInt(x) * 299) + 
                (parseInt(y) * 587) + 
                (parseInt(z) * 114)) / 1000); 
    let backgroundColor = "rgb(" + x + "," + y + "," + z + ")";
    var textColor = (color > 125) ? 'black' : 'white';

    element.style.color = textColor;
    element.style.background = backgroundColor;
}