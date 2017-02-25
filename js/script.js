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
				alert(xhr.response);
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


//////////////////////galery/////////////////////////////
$(document).ready(function(){
// Выполняется при загрузке страницы
var preventClick=false;
$(".pic a").bind("click",function(e){

if(preventClick)
{
e.stopImmediatePropagation();
e.preventDefault();
}
});

$(".pic").draggable({

/* Преобразовуем изображения в объекты, которые можно переносить */
containment: 'parent',
start: function(e,ui){
/* Во время переноса будут отключены клики */
preventClick=true;
},
stop: function(e, ui) {
/* Подождать 250 милисекунд перед включением возможности кликать вновь */
setTimeout(function(){ preventClick=false; }, 250);
}
});

$('.pic').mousedown(function(e){
/* Executed on image click */
var maxZ = 0;

/* Найти максимальное свойство z-index: */
$('.pic').each(function(){
var thisZ = parseInt($(this).css('zIndex'))
if(thisZ>maxZ) maxZ=thisZ;
});

if($(e.target).hasClass("pic"))
{
/* Показать кликнутое изображение поверх всех остальных : */
$(e.target).css({zIndex:maxZ+1});
}
else $(e.target).closest('.pic').css({zIndex:maxZ+1});
});

/* Преобразуем все ссылки для ссылок лайтбокса */
$("a.fancybox").fancybox({
zoomSpeedIn: 300,
zoomSpeedOut: 300,
overlayShow:false
});

$('.drop-box').droppable({
hoverClass: 'active',
drop:function(event,ui){

$('#url').val(location.href.replace(location.hash,'')+'#' + ui.draggable.attr('id'));
$('#modal').dialog('open');
}
});

/* Преобразовует div с id="modal" в модальное окно */
$("#modal").dialog({
bgiframe: true,
modal: true,
autoOpen:false,

buttons: {
Ok: function() {
$(this).dialog('close');
}
}
});

if(location.hash.indexOf('#pic-')!=-1)
{

$(location.hash+' a.fancybox').click();
}
});
//////////////// galery fin //////////////////////


///////////////////draG///////////////////
$(document).ready(function(){
// Executed once all the page elements are loaded

	var preventClick=false;
	
	$(".pic a").bind("click",function(e){
		/* This function stops the drag from firing a click event and showing the lightbox */
		if(preventClick)
		{
			e.stopImmediatePropagation();
			e.preventDefault();
		}
	});

	$(".pic").draggable({
		/* Converting the images into draggable objects */
		containment: 'parent',
		start: function(e,ui){
			/* This will stop clicks from occuring while dragging */
			preventClick=true;
		},
		
		stop: function(e, ui) {
			/* Wait for 250 milliseconds before re-enabling the clicks */
			setTimeout(function(){ preventClick=false; }, 250);
		}
	});


	$('.pic').mousedown(function(e){
								 
		/* Executed on image click */
		
		var maxZ = 0;
		
		/* Find the max z-index property: */
		
		$('.pic').each(function(){
			var thisZ = parseInt($(this).css('zIndex'))
			if(thisZ>maxZ) maxZ=thisZ;
		});
		
		/* Clicks can occur in the picture container (with class pic) and in the link inside it */
		if($(e.target).hasClass("pic"))
		{
			/* Show the clicked image on top of all the others: */
			$(e.target).css({zIndex:maxZ+1});
		}
		else $(e.target).closest('.pic').css({zIndex:maxZ+1});
	});
	
	/* Converting all the links to a fancybox gallery */
	$("a.fancybox").fancybox({
		zoomSpeedIn: 300,
		zoomSpeedOut: 300,
		overlayShow:false
	});
	
	/* Converting the share box into a droppable: */
	$('.drop-box').droppable({
		hoverClass: 'active',
		drop:function(event,ui){
			/* Fill the URL text field with the URL of the image. */
			/* The id of the image is appended as a hash #pic-123 */
			$('#url').val(location.href.replace(location.hash,'')+'#'+ui.draggable.attr('id'));
			$('#modal').dialog('open');
		}
	});

	/* Converts the div with id="modal" into a modal window  */
	$("#modal").dialog({
		bgiframe: true,
		modal: true,
		autoOpen:false,
		buttons: {
				Ok: function() {
					$(this).dialog('close');
				}
			}
	});
	
	if(location.hash.indexOf('#pic-')!=-1)
	{
		/* Checks whether a hash is present in the URL */
		/* and shows the respective image */
		$(location.hash+' a.fancybox').click();
	}
	
});

/////////////////

//////////////////////////////////////////////////////////////////
//------------------------PARTENARIAT---------------------------//
//////////////////////////////////////////////////////////////////

$("#boutton1").on("click", function(){
	$("#partenariat3").css("display", "none");
	$("#partenariat2").css("display", "none");
	$("#partenariat1").slideToggle("slow");
});
$("#boutton2").on("click", function(){
	$("#partenariat3").css("display", "none");
	$("#partenariat1").css("display", "none");
	$("#partenariat2").slideToggle("slow");
});
$("#boutton3").on("click", function(){
	$("#partenariat1").css("display", "none");
	$("#partenariat2").css("display", "none");
	$("#partenariat3").slideToggle("slow");
});