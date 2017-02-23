function escapeHtml(text) {
  return text
      .replace(/&/g, "&amp;")
      .replace(/</g, "&lt;")
      .replace(/>/g, "&gt;")
      .replace(/"/g, "&quot;")
      .replace(/'/g, "&#039;");
}
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
var data ="";
function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#image')
        .attr('src', e.target.result)
        .width(150)
        .height(200);
        data =e.target.result;
        console.log(data);
    };
    reader.readAsDataURL(input.files[0]);

  }
}
function go(page){
	var xhr = getXHR();
	xhr.onreadystatechange = function(){
		if(xhr.readyState == 4 && xhr.status == 200){
			var reponse = xhr.response;
			document.getElementById("sectionAdmin").innerHTML = reponse;
		}
	}
	if(page=="password"){
		xhr.open("GET","include/changePassword.php",true);
		xhr.send(null);
	}
	else if(page=="imageArticle"){
		xhr.open("GET","include/ajoutArticle.php",true);
		xhr.send(null);
	}
	else if(page=="ajoutImage"){
		xhr.open("GET","include/ajoutImage.php", true);
		xhr.send(null);
	}
	else if(page=="article"){
		xhr.open("POST","include/AjouteArticle.php",true);
		xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
		image = data;
		para = document.getElementById("paragraphe").value;
		titre = document.getElementById("TitreArticle").value;
		pomme = new Array;
		pomme.push(titre); pomme.push(image); pomme.push(para);
		xhr.send("pomme="+pomme);
	}

		
}
function visual(){
	document.getElementById("TitreArticle").addEventListener("input", function(){
		document.getElementById("titre").innerHTML = "<h1>"+escapeHtml(document.getElementById("TitreArticle").value)+"</h1>";
	});
	document.getElementById("fichier").addEventListener("blur", function(){
		document.getElementById("image").innerHTML == "<img src='"+document.getElementById("fichier").value+"/>";
	});
	document.getElementById("paragraphe").addEventListener("input", function(){
		document.getElementById("paragrapheVisuel").innerHTML = "<p>"+escapeHtml(document.getElementById("paragraphe").value)+"</p>";
	});
}