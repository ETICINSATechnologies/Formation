/**
 * Created by Kabar on 08/10/2016.
 */

var MAX = 1200;
var MIN = 960;

var MIN2 = 45;
var MAX2 = 100;

function translateFr1(){
    document.getElementById('translate').style.backgroundImage = "url('iconTrad2.png')";
    document.getElementById('translate').onclick = translateEng1;
    var newHtml =
        "<section></section>"+
        "<section>"+
        "<button onclick='enleverCritics()'>Enlever Critiques</button>"+
        "</section>"+

        "<div class='clear'></div>"+

        "<section>"+
        "<h1>Ouest France</h1>"+
        "<p>Clint Eastwood prend son rang dans le panthéon des maîtres.</p>"+
        "</section>"+

        "<section>"+

        "<h1>Le Parisien</h1>"+
        "<p>Passionnant, humaniste, drôle mais aussi déchirant.</p>"+
        "</section>"+

        "<section>"+

        "<h1>Les Inrockuptibles</h1>"+
        "<p>Clint se livre comme jamais.</p>"+
        "</section>"

    document.getElementById('critics').innerHTML = newHtml;

    var newHtml = "<h2>Synopsis</h2>"+
        "<ul>"+
        "<li>Walt Kowalski est un ancien de la guerre de Corée, un homme inflexible, amer et pétri de préjugés surannés. Après des années de travail à la chaîne, il vit replié sur lui-même, occupant ses journées à bricoler, traînasser et siroter des bières.</li>"+
        " <button onclick='enleverSynopsis()'>Enlever</button>"+

        "</ul>";
    document.getElementById('synopsis').innerHTML = newHtml;

}



function enleverSynopsis(){

    document.getElementById('synopsis').innerHTML = "<button onclick='ajouterSynopsis()'>Ajouter Synopsis</button>";

}


function ajouterSynopsis() {

    var newHtml = "<h2>Synopsis</h2>"+
        "<ul>"+
        "<li>Walt Kowalski est un ancien de la guerre de Corée, un homme inflexible, amer et pétri de préjugés surannés. Après des années de travail à la chaîne, il vit replié sur lui-même, occupant ses journées à bricoler, traînasser et siroter des bières.</li>"+
   " <button onclick='enleverSynopsis()'>Enlever</button>"+

        "</ul>";
    document.getElementById('synopsis').innerHTML = newHtml;

}


function enleverCritics(){

    document.getElementById('critics').innerHTML = "<button onclick='ajouterCritics()'>Ajouter Critiques</button>";

}

function ajouterCritics(){

    var newHtml =
        "<section></section>"+
        "<section>"+
            "<button onclick='enleverCritics()'>Enlever Critiques</button>"+
        "</section>"+

            "<div class='clear'></div>"+

        "<section>"+
            "<h1>Ouest France</h1>"+
            "<p>Clint Eastwood prend son rang dans le panthéon des maîtres.</p>"+
        "</section>"+

        "<section>"+

            "<h1>Le Parisien</h1>"+
            "<p>Passionnant, humaniste, drôle mais aussi déchirant.</p>"+
        "</section>"+

        "<section>"+

        "<h1>Les Inrockuptibles</h1>"+
        "<p>Clint se livre comme jamais.</p>"+
        "</section>"

    document.getElementById('critics').innerHTML = newHtml;
}



function translateEng1(){
    document.getElementById('translate').style.backgroundImage = "url('iconTrad.png')";
    document.getElementById('translate').onclick = translateFr1;

    var newHtml =
        "<section></section>"+
        "<section>"+
        "<button onclick='takeOffCritics()'>Take off Critics</button>"+
        "</section>"+

        "<div class='clear'></div>"+

        "<section>"+
        "<h1>Ouest France</h1>"+
        "<p>Clint Eastwood takes his place in the pantheon of masters.</p>"+
        "</section>"+

        "<section>"+

        "<h1>Le Parisien</h1>"+
        "<p>Exciting, humanist, funny but also heartbreaking.</p>"+
        "</section>"+

        "<section>"+

        "<h1>Les Inrockuptibles</h1>"+
        "<p>Clint is engaged as never.</p>"+
        "</section>"
    document.getElementById('critics').innerHTML = newHtml;

    var newHtml = "<h2>Synopsis</h2>"+
        "<ul>"+
        "<li>Walt Kowalski is a veteran of the Korean War, an inflexible man, bitter and steeped in antiquated prejudices. After years of line work, he saw folded on itself, occupying his days tinkering, dawdle and sipping beers.</li>"+
        " <button onclick='takeOffSynopsis()'>Take off</button>"+

        "</ul>";
    document.getElementById('synopsis').innerHTML = newHtml;

}


function takeOffSynopsis(){

    document.getElementById('synopsis').innerHTML = "<button onclick='addSynopsis()'>Add Synopsis</button>";

}


function addSynopsis() {

    var newHtml = "<h2>Synopsis</h2>"+
        "<ul>"+
        "<li>Walt Kowalski is a veteran of the Korean War, an inflexible man, bitter and steeped in antiquated prejudices. After years of line work, he saw folded on itself, occupying his days tinkering, dawdle and sipping beers.</li>"+
        " <button onclick='takeOffSynopsis()'>Take off</button>"+

        "</ul>";
    document.getElementById('synopsis').innerHTML = newHtml;

}


function takeOffCritics(){

    document.getElementById('critics').innerHTML = "<button onclick='addCritics()'>Add Critics</button> ";

}


function addCritics(){

    var newHtml =
        "<section></section>"+
        "<section>"+
        "<button onclick='takeOffCritics()'>Take off Critics</button>"+
        "</section>"+

        "<div class='clear'></div>"+

        "<section>"+
        "<h1>Ouest France</h1>"+
        "<p>Clint Eastwood takes his place in the pantheon of masters</p>"+
        "</section>"+

        "<section>"+

        "<h1>Le Parisien</h1>"+
        "<p>Exciting, humanist, funny but also heartbreaking</p>"+
        "</section>"+

        "<section>"+

        "<h1>Les Inrockuptibles</h1>"+
        "<p>Clint is engaged as never</p>"+
        "</section>"
    document.getElementById('critics').innerHTML = newHtml;
}



function jour() {

    document.getElementById('mode').style.backgroundImage = "url('jour.png')";
    document.getElementById('mode').onclick = nuit;
    document.getElementById('main').style.background = "WHITE";
    document.getElementById('main').style.color = "BLACK";
}


function nuit() {

    document.getElementById('mode').style.backgroundImage = "url('nuit.png')";
    document.getElementById('mode').onclick = jour;
    document.getElementById('main').style.background = "BLACK";
    document.getElementById('main').style.color = "WHITE";

}

function translateEng2() {
    document.getElementById('translate').style.backgroundImage = "url('iconTrad.png')";
    document.getElementById('translate').onclick = translateFr2;
    var newHtml =
        "<li><a href='https://www.youtube.com/watch?v=_H82lClkKcY&list=PLie81AKPJh1KXEO8jI0o7YzpsqVRooEu4&index=2' style = 'color: BLACK' >Click Here </a></li>"
    document.getElementById('linkMain').innerHTML = newHtml;
}


function translateFr2() {
    document.getElementById('translate').style.backgroundImage = "url('iconTrad2.png')";
    document.getElementById('translate').onclick = translateEng2;
    var newHtml =
        "<li><a href='https://www.youtube.com/watch?v=_H82lClkKcY&list=PLie81AKPJh1KXEO8jI0o7YzpsqVRooEu4&index=2' style = 'color: BLACK' >Cliquez ici</a></li>"
    document.getElementById('linkMain').innerHTML = newHtml;
}


function translateFr3() {

    document.getElementById('translate').style.backgroundImage = "url('iconTrad2.png')";
    document.getElementById('translate').onclick = translateEng3;
    var newHtml =
        "<h1>Rejoins-nous !</h1>"+
            "<form method='post' action='traitement.php'>"+
            "<p>"+
                "<label for='pseudo'>Votre pseudo :</label>"+
                "<input type='text' name='pseudo' id='pseudo' />"+

                "<br />"+
                "<label for='email'>Votre email :</label>"+
                "<input type='email' name='email' id='email' />"+

                "<br />"+
                "<label for='pass'>Votre mot de passe :</label>"+
                "<input type='password' name='pass' id='pass' />"+

                "<br />"+
                "<label for='titreComm'>Titre de votre commentaire :</label>"+
                "<input type='text' name='titreComm' id='titreComm' />"+

                "<br />"+
                "<label for='comm'>Votre commentaire : </label>"+
                "<br />"+
                "<textarea name='comm' id='comm' rows='10' cols='50'></textarea>"+

                "<br />"+
                "<input type='submit' value='Envoyer' />"+
            "</p>"+
            "</form>"

    document.getElementById('formulaire').innerHTML = newHtml;

}

function translateEng3() {

    document.getElementById('translate').style.backgroundImage = "url('iconTrad.png')";
    document.getElementById('translate').onclick = translateFr3;
    var newHtml =
        "<h1>Join us !</h1>"+
        "<form method='post' action='traitement.php'>"+
        "<p>"+
        "<label for='pseudo'>Your login :</label>"+
        "<input type='text' name='pseudo' id='pseudo' />"+

        "<br />"+
        "<label for='email'>Your email :</label>"+
        "<input type='email' name='email' id='email' />"+

        "<br />"+
        "<label for='pass'>Your password :</label>"+
        "<input type='password' name='pass' id='pass' />"+

        "<br />"+
        "<label for='titreComm'>Title of your comment :</label>"+
        "<input type='text' name='titreComm' id='titreComm' />"+

        "<br />"+
        "<label for='comm'>Your comment : </label>"+
        "<br />"+
        "<textarea name='comm' id='comm' rows='10' cols='50'></textarea>"+

        "<br />"+
        "<input type='submit' value='Send' />"+
        "</p>"+
        "</form>"

    document.getElementById('formulaire').innerHTML = newHtml;
}

function nuit2(){

    document.getElementById('mode').style.backgroundImage = "url('nuit.png')";
    document.getElementById('mode').onclick = jour2;
    document.getElementById('main').style.background = "BLACK";
    document.getElementById('main').style.color = "WHITE";
    var newHtml = "<li><a href='https://www.youtube.com/watch?v=_H82lClkKcY&list=PLie81AKPJh1KXEO8jI0o7YzpsqVRooEu4&index=2' style = 'color: WHITE' >Cliquez ici </a></li>"

    document.getElementById('linkMain').innerHTML = newHtml;
}

function  jour2() {

    document.getElementById('mode').style.backgroundImage = "url('jour.png')";
    document.getElementById('mode').onclick = nuit2;
    document.getElementById('main').style.background = "WHITE";
    document.getElementById('main').style.color = "BLACK";
    var newHtml = "<li><a href='https://www.youtube.com/watch?v=_H82lClkKcY&list=PLie81AKPJh1KXEO8jI0o7YzpsqVRooEu4&index=2' style = 'color: BLACK' >Cliquez ici </a></li>"

    document.getElementById('linkMain').innerHTML = newHtml;

}


function agrandir(){

    var interval = setInterval(agrandirTime, 5);
    document.getElementById("image").onclick = reduire;
    function agrandirTime() {
        if(MIN == MAX){
            MIN = 960;
            clearInterval(interval)
        }
        else{
            MIN++;
            document.getElementById("content").style.maxWidth = MIN +"px";
        }
    }
}



function reduire(){


    var interval = setInterval(reduireTime, 5);
    document.getElementById("image").onclick = agrandir;
    function reduireTime() {
        if(MAX == MIN){
            MAX = 1200;
            clearInterval(interval)
        }
        else{
            MAX--;
            document.getElementById("content").style.maxWidth = MAX +"px";
        }
    }
}

function agrandir2(){


    var interval = setInterval(agrandirTime, 25);
    document.getElementById("image2").onclick = reduire2;
    function agrandirTime() {
        if(MIN2 == MAX2){
            MIN2 = 45;
            clearInterval(interval)
        }
        else{
            MIN2++;
            document.getElementById("image2").style.width = MIN2 +"%";
        }
    }
}

function reduire2(){


    var interval = setInterval(reduireTime, 25);
    document.getElementById("image2").onclick = agrandir2;
    function reduireTime() {
        if(MAX2 == MIN2){
            MAX2 = 100;
            clearInterval(interval)
        }
        else{
            MAX2--;
            document.getElementById("image2").style.width = MAX2 +"%";
        }
    }

}