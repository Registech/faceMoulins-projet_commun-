  ///////////////////////////////////
 //----------CHANGE IMG-----------//
///////////////////////////////////
$('#articleUn').on('click', function(e){
	e.preventDefault();
	$('#img1').css('width', '100%');
	$('#img1').css('height', '100%');
	$('#img1').attr('src', 'http://www.fondationface.org/wp-content/uploads/hollande-675x385.jpg');
	$("#lienArticle").attr("href", "http://www.fondationface.org/lancement-de-la-fondation-pour-linvestissement-social-et-le-developpement-humain/");
});
$("#articleDeux").on('click', function(e){
	e.preventDefault();
	$('#img1').css('width', '100%');
	$('#img1').css('height', '100%');
	$('#img1').attr('src', 'http://www.fondationface.org/wp-content/uploads/quartiers-banniere-675x385.png');
	$("#lienArticle").attr("href", "http://www.fondationface.org/lancement-du-concours-sengager-pour-les-quartiers-edition-2017/");
});
$('#articleTrois').on('click',function(e){
	e.preventDefault();
	$('#img1').css('width', '100%');
	$('#img1').css('height', '100%');
	$('#img1').attr('src', "http://www.fondationface.org/wp-content/uploads/selfigaz-min-675x385.png");
	$("#lienArticle").attr("href", "http://www.fondationface.org/civigaz-vainqueur-kioz-de-grdf/");
});
///////////////////////////////////
//---------Active Menu-----------//
///////////////////////////////////
var active = document.getElementsByClassName("active");
if(document.location.href.indexOf("index.php") != -1)
	active[0].id = "active";
else if(document.location.href.indexOf("presentation.php") != -1)
	active[1].id = "active";
else if (document.location.href.indexOf("galerie.php") != -1)
	active[2].id = "active";
else if (document.location.href.indexOf("partenariat.php") != -1)
	active[3].id = "active";
else if (document.location.href.indexOf("laFabrik.php") != -1)
	active[4].id = "active";
else if (document.location.href.indexOf("contact.php") != -1)
	active[5].id = "active";

///////////////////////////////////
//-------Limite recherche--------//
///////////////////////////////////
document.getElementById('search').addEventListener('input',function(){
	if(document.getElementById('search').value.length > 11){
		alert('Vous avez entrez trop de caractères.');
		document.getElementById('search').value.length --;
	}
})

///////////////////////////////////		
//----------Cache header---------//		
///////////////////////////////////		
$(document).on('scroll', function(){	

	if ($(this).scrollTop()>115) {
		$('#top').slideUp();
	}else{
		$('#top').slideDown();
	}	
   		
});

///////////////////////////////////
//-------Menu slide down---------//
///////////////////////////////////

$(document).ready(function(){
	$(".dropdown").hover(
		function() {
			$('.dropdown-menu', this).not('.in .dropdown-menu').stop( true, true ).slideDown("fast");
			$(this).toggleClass('open');
		},
		function() {
			$('.dropdown-menu', this).not('.in .dropdown-menu').stop( true, true ).slideUp("fast");
			$(this).toggleClass('open');
		}
	);
});

///////////////////////////////////
//---------Valid mail------------//
///////////////////////////////////

function IsValidateEmail(email) {
    var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,6})$/;
    return reg.test(email);
}

//////////////////////////////////
//-----------AJAX--------------//
////////////////////////////////

function getXHR(){
	var xhr = null; 
 
	if(window.XMLHttpRequest) // Firefox et autres
	   xhr = new XMLHttpRequest(); 
	else if(window.ActiveXObject){ // Internet Explorer 
	   try {
                xhr = new ActiveXObject("Msxml2.XMLHTTP");
            } catch (e) {
                xhr = new ActiveXObject("Microsoft.XMLHTTP");
            }
	}
	else { // XMLHttpRequest non supporté par le navigateur 
	   alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest..."); 
	   xhr = false; 
	} 
	return xhr;
}
function goXHR(){
	if(IsValidateEmail(document.getElementById("mailer").value)){
		var xhr = getXHR();
		xhr.onreadystatechange = function(){
			// On ne fait quelque chose que si on a tout reçu et que le serveur est ok
			if(xhr.readyState == 4 && xhr.status == 200){
				alert("Inscription à la newsLetter effectué");
			}
		}
		xhr.open("POST","include/newsLetter.php",true);
		// ne pas oublier ça pour le post
		xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
		// ne pas oublier de poster les arguments
		mailer = document.getElementById('mailer').value;
		xhr.send("email="+mailer);
	}
	else{
		   	alert("Veuillez entrer un adresse mail valide");
		}
}
