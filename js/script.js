  ///////////////////////////////////
 //----------CHANGE IMG-----------//
///////////////////////////////////
$('#articleUn').on('click', function(e){
	e.preventDefault();
	$('#img1').css('width', '550px');
	$('#img1').css('height', '400px');
	$('#img1').attr('src', 'https://facegrandlyondotcom.files.wordpress.com/2014/05/capture-das-transparent.png');
});
$("#articleDeux").on('click', function(e){
	e.preventDefault();
	$('#img1').css('width', '700px');
	$('#img1').css('height', '400px');
	$('#img1').attr('src', 'http://www.fondationface.org/wp-content/uploads/hollande-675x385.jpg');
});
$('#articleTrois').on('click',function(e){
	e.preventDefault();
	$('#img1').css('width', '675px');
	$('#img1').css('height', '400px');
	$('#img1').attr('src', "http://www.fondationface.org/wp-content/uploads/selfigaz-min-675x385.png");
});



