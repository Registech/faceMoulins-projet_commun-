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
var lienMenu = document.getElementsByClassName("lienMenu");
if(document.location.href.indexOf("index.php") != -1)
	lienMenu[0].id = "active";
else if(document.location.href.indexOf("presentation.php") != -1)
	lienMenu[1].id = "active";
else if (document.location.href.indexOf("galerie.php") != -1)
	lienMenu[2].id = "active";
else if (document.location.href.indexOf("partenariat.php") != -1)
	lienMenu[3].id = "active";
else if (document.location.href.indexOf("laFabrik.php") != -1)
	lienMenu[4].id = "active";
else if (document.location.href.indexOf("contact.php") != -1)
	lienMenu[5].id = "active";


///////////////////////////////////		
//----------Cache header---------//		
///////////////////////////////////		
$(document).on('scroll', function(){	

	if ($(this).scrollTop()>1) {
		$('#headerRecherche').slideUp();
	}else{
		$('#headerRecherche').slideDown();
	}	
   		
});

function IsValidateEmail(email) {
				      var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,6})$/;
				      return reg.test(email);
				}
				document.getElementById('boxEnveloppe').addEventListener("click", function () {
					if(IsValidateEmail(document.getElementById("mail").value)){
					  		alert("C`est bon");
					}
					
					else{
				    	alert("ERRROR");
					}
				});