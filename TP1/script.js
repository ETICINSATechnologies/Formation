function Showsynopsis() {
    if (document.getElementById("panelsynopsis").style.display == "block"){
        document.getElementById("panelsynopsis").style.display = "none";
        document.getElementById("iconsynopsis").setAttribute("class","fa fa-caret-right");

    } else {
        document.getElementById("panelsynopsis").style.display = "block";
        document.getElementById("iconsynopsis").setAttribute("class","fa fa-caret-down");
    }

}

function Showimages() {
    if (document.getElementById("panelimages").style.display == "block"){
        document.getElementById("panelimages").style.display = "none";
        document.getElementById("iconimages").setAttribute("class","fa fa-caret-right");
    } else {
        document.getElementById("panelimages").style.display = "block";
        document.getElementById("iconimages").setAttribute("class","fa fa-caret-down");
    }

}

function Showperso() {
    if (document.getElementById("panelperso").style.display == "block"){
        document.getElementById("panelperso").style.display = "none";
        document.getElementById("iconperso").setAttribute("class","fa fa-caret-right");
    } else {
        document.getElementById("panelperso").style.display = "block";
        document.getElementById("iconperso").setAttribute("class","fa fa-caret-down");
    }

}

function Showbandeannonce() {
    if (document.getElementById("panelvideo").style.display == "block"){
        document.getElementById("panelvideo").style.display = "none";
        document.getElementById("iconbande").setAttribute("class","fa fa-caret-right");
    } else {
        document.getElementById("panelvideo").style.display = "block";
        document.getElementById("iconbande").setAttribute("class","fa fa-caret-down");
    }

}

function switchStyle(){
    if (document.getElementById("mycss").getAttribute("href")=="stylesheet.css"){
        document.getElementById("mycss").setAttribute("href","stylesheetjour.css");

    } else {
        document.getElementById("mycss").setAttribute("href","stylesheet.css");
    }

}

function zoom(image,taille){

    if (document.getElementById(image).getAttribute("class")=="img petit"){
        //document.getElementById(image).style.float = "none";
       // document.getElementById(image).style.margin="auto";
        //document.getElementById("panelimages").style.paddingBottom = "500px";

        zoom2(image,taille)
    } else {

        dezoom(image, 600);
    }



}


function zoom2(image,taille) {

    if (taille <600) {
        document.getElementById(image).style.width = taille+"px";
        taille=taille+2;
        setTimeout(zoom2, 5, image, taille);
    } else {
        document.getElementById(image).setAttribute("class","img grand");
    }

}


function dezoom(image, taille) {

    if (taille > 180) {
        document.getElementById(image).style.width = taille+"px";
        taille=taille-2;
        setTimeout(dezoom, 5, image, taille);
    } else {
        //document.getElementById(image).style.float = "left";
        //document.getElementById(image).style.margin="5px";
        document.getElementById(image).setAttribute("class","img petit");
        //document.getElementById("panelimages").style.paddingBottom = "100px";
    }

}
