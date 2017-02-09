  ///////////////////////////////////
 //----------CHANGE IMG-----------//
///////////////////////////////////
$('#articleUn').on('click', function(e){
	e.preventDefault();
	$('#img1').css('width', '100%');
	$('#img1').css('height', '100%');
	$('#img1').attr('src', 'http://www.fondationface.org/wp-content/uploads/hollande-675x385.jpg');
});
$("#articleDeux").on('click', function(e){
	e.preventDefault();
	$('#img1').css('width', '100%');
	$('#img1').css('height', '100%');
	$('#img1').attr('src', 'http://www.fondationface.org/wp-content/uploads/quartiers-banniere-675x385.png');
});
$('#articleTrois').on('click',function(e){
	e.preventDefault();
	$('#img1').css('width', '100%');
	$('#img1').css('height', '100%');
	$('#img1').attr('src', "http://www.fondationface.org/wp-content/uploads/selfigaz-min-675x385.png");
});

///////////////////////////////////
 //----------Cache header---------//
///////////////////////////////////
$(document).on('scroll', function(){
    $('#headerRecherche').stop().slideUp();
    //$('#corpPage').css('margin-top', '-120px'); //voir avec animate et une durée de transition
    if ($(this).scrollTop()<50){
        $('#headerRecherche').stop().slideDown();
    }
});
///////////////////////////////////
 //----------Cache header---------//
///////////////////////////////////
$(document).on('scroll', function(){
    $('#headerRecherche').stop().slideUp();
    if ($(this).scrollTop()<50){
        $('#headerRecherche').stop().slideDown();
    }
});

