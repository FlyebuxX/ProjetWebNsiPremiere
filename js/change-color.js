function changeColor() {

    var color = prompt("Quelle couleur souhaitez vous pour le fond de la page ? (écrire la couleur en anglais) ", "default");

    if (color != 'default') {
        document.body.style.background = color;
    }
    
    else {
        document.body.style.backgroundImage = "url(../images/bg.jpg)";
        document.body.style.backgroundSize = "cover";
    }    
}   