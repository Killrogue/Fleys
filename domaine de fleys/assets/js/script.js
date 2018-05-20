$(function(){
	$(".bouteilles2").animate({left: '11vw' , opacity: '1'},{duration: 3500});
	$(".bouteilles3").animate({left: '7vw' , opacity: '1'},{duration: 3500});
	$(".bouteilles1").animate({left: '75vw' , opacity: '1'},{duration: 3500});
	$('#connexion').on('submit', connexion);
	$('#inscription').on('submit', inscription);
});


function connexion(e){
	e.preventDefault();
	var donnees = $(this).serialize();
    $.ajax(
        {
            url: "action_connection.php",
            type: "POST",
            data: donnees
        }
    ).done(function(reponse){
        //$("#feedback").html(reponse);
        $(location).attr('href',"http://localhost/domaine%20de%20fleys/page_d'accueil_DDF.php");
    }).fail(function(error){
        console.log(error);
    });    
}

function inscription(e){
	e.preventDefault();
	var donnees = $(this).serialize();
    $.ajax(
        {
            url: "insert_user.php",
            type: "POST",
            data: donnees
        }
    ).done(function(reponse){
        $("#feedback").html(reponse);
    }).fail(function(error){
        console.log(error);
    });    
}

