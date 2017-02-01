var img1 = document.getElementById('img1')
var article1 = document.getElementById('articleUn')
var article2 = document.getElementById('articleDeux')
var article3 = document.getElementById('articleTrois')



article1.addEventListener('click',function(){
	img1.src = "https://facegrandlyondotcom.files.wordpress.com/2014/05/capture-das-transparent.png";
});

article2.addEventListener('click',function(e){
	e.preventEvent();
	img1.src = "http://www.fondationface.org/wp-content/uploads/hollande-675x385.jpg";
});

article3.addEventListener('click',function(){
	img1.src = "http://www.fondationface.org/wp-content/uploads/selfigaz-min-675x385.png";
});