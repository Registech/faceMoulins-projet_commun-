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
//----------Cache header---------//		
///////////////////////////////////		
$(document).on('scroll', function(){	

	if ($(this).scrollTop()>1) {
		$('#headerRecherche').slideUp();
	}else{
		$('#headerRecherche').slideDown();
	}	
   		
});

