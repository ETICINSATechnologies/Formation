$(document).ready(function(){
    recupMessages();
    $('.formulaire').submit(function(){

        var titreComm = $('.titreComm').val();
        var comm = $('.comm').val();

        $.post('envoyercommentaires.php',{titreComm:titreComm,comm:comm},function(donnees){
            $('.return').html(donnees);
            $('.titreComm').val('');
            $('.comm').val('');
            recupMessages();
        });

        return false;
    });


    function recupMessages(){

        $.post('recupcommentaires.php',function(data){
            $('.afficher').html(data);
        });
    }

    setInterval(recupMessages, 1000);

});
