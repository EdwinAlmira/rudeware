
$(document).ready(function() {
   rudeware.getView("views/nav.php","rudenav");
   rudeware.getView("views/main.php","view");
   //cargar las vistas para el index.php

});

function getLogin(){
	rudeware.getView("views/login.php","view");
}
// objeto que carga vistas mediante ajax
var rudeware={};
rudeware.getView = function(view,section) {
	$.post(
		view,
		{},
		function(data) {

			$("."+section).html(data);
			// si es el index activar typed js
			if(view == "views/main.php"){
				$('.carousel').carousel({
						interval:4000
				});
				$(".typed h3").typed({
			        strings: ["Mejores herramientas","Servicios personalizados","Seguridad empresarial"],
			        typeSpeed: 100,
					backDelay: 1500, 
					loop:true
			    }); 
			}
		}
	).fail(function(xhr) {
		alert("No se pudo establecer conexión con el servidor");
	})
}
