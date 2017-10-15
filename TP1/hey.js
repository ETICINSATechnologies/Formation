/**
 * Created by charles-nicolas on 12/10/16.
 */


function trad(bouton, page) {
    if(bouton.name == "Francais"){
        if(page == 'TP1') {
            document.getElementById("synopsis").innerHTML = "<p><h3>Synopsis</h3>Dom Cobb is a skilled thief - the best ever in the dangerous art of extraction: his specialty is to appropriate the secrets the most valuable of an individual, buried deep in his subconscious, while he dreams and his spirit is particularly vulnerable. Prized for his talents in the murky world of corporate espionage, Cobb also became a fugitive hunted around the world who lost everything dear to him. But a final mission could enable him to regain his former life - provided he can accomplish the impossible: the inception. Instead of stealing a dream, Cobb and his team must do the opposite: implanting an idea in the mind of an individual. If they succeed, it could be the perfect crime. And yet, as methodical and talented they are, nothing could Cobb and its partners prepare for a dangerous enemy that seems to have always a step ahead of them. An enemy that only Cobb could have have suspected the existence.</p>";
        } else if(page == 'Presentation') {
            document.getElementById("titre").innerHTML = "Who created this website?";
        } else if(page == 'LivreOr'){
            document.getElementById("pseu").innerHTML = "Your Username";
            document.getElementById("mdp").innerHTML = "Your password";
            document.getElementById("comm").innerHTML = "A comment ?";
        }
        bouton.name = "Anglais";
        bouton.innerHTML = "Anglais"
    } else {
        if(page == 'TP1') {
            document.getElementById("synopsis").innerHTML = "<p><h3>Synopsis</h3>Dom Cobb est un voleur expérimenté – le meilleur qui soit dans l’art périlleux de l’extraction : sa spécialité consiste à s’approprier les secrets les plus précieux d’un individu, enfouis au plus profond de son subconscient, pendant qu’il rêve et que son esprit est particulièrement vulnérable. Très recherché pour ses talents dans l’univers trouble de l’espionnage industriel, Cobb est aussi devenu un fugitif traqué dans le monde entier qui a perdu tout ce qui lui est cher. Mais une ultime mission pourrait lui permettre de retrouver sa vie d’avant – à condition qu’il puisse accomplir l’impossible : l’inception. Au lieu de subtiliser un rêve, Cobb et son équipe doivent faire l’inverse : implanter une idée dans l’esprit d’un individu. S’ils y parviennent, il pourrait s’agir du crime parfait. Et pourtant, aussi méthodiques et doués soient-ils, rien n’aurait pu préparer Cobb et ses partenaires à un ennemi redoutable qui semble avoir systématiquement un coup d’avance sur eux. Un ennemi dont seul Cobb aurait pu soupçonner l’existence.  </p>";
        } else if(page == 'Presentation') {
            document.getElementById("titre").innerHTML = "Qui a crée ce site ?";
        } else if(page == 'LivreOr'){
            document.getElementById("pseu").innerHTML = "Votre identifiant";
            document.getElementById("mdp").innerHTML = "Votre Mot de Passe";
            document.getElementById("comm").innerHTML = "Un commentaire ?";
        }
        bouton.name = "Francais";
        bouton.innerHTML = "Français";
    }
}

function nuit(input) {
    if(input.name == "Jour"){
        document.body.style.backgroundColor = "#2c3e50";
        document.body.style.color = "#ecf0f1";
        input.name = "Nuit"
    } else {
        document.body.style.backgroundColor = "#ecf0f1";
        document.body.style.color = "#2c3e50";
        input.name = "Jour"
    }
}

function agrandirOuReduire(img){
    img.style.transition = "0.5s";
    if (img.name == "petit"){
        img.style.height = "1200px";
        img.style.width = "1920px";
        img.name = "grand";
    } else {
        img.style.height = "400px";
        img.style.width = "640px";
        img.name = "petit";
    }
}