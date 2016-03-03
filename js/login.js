
$(document).ready(function() {
   rudeware.getView("../views/nav.php","rudenav");
   //cargar la el menu mediante AJAX

});

function getLogin(){

	rudeware.getView("views/login.php","view");
}
// objeto que permite peticion de archivos html
var rudeware={};
rudeware.getView = function(view,section) {
	$.post(
		view,
		{},
		function(data) {
			$("."+section).html(data);			
		}
	).fail(function(xhr) {
		alert("No se pudo establecer conexión con el servidor");
	})
}
