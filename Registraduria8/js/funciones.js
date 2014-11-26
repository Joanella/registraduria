$(document).ready(function() {
  $("#Opc").click(function() {
	$("#contenido").load('php/Home/Home.php');
  });
  $("#Opc2").click(function() {
	$("#contenido").load('php/Candidatos/Candidatos.php');
  });
  $("#Opc1").click(function() {
	$("#contenido").load('php/Ciudadanos/Ciudadanos.php');
  });
  $("#Opc3").click(function() {
	$("#contenido").load('php/Empresas/Empresas.php');
  });
  $("#Opc4").click(function() {
	$("#contenido").load('php/Jurados/Jurados.php');
  });

});
function MenuCiudadanos() {
	$("#registrarse").click(function() {
		$("#contenido").load('php/Ciudadanos/VRegistrarse.php');
	});
	$("#postularse").click(function() {
		$("#cargo").load("includes/postular.html");
	});
	$("#ingresar").click(function() {
		$("#cargo").load("includes/ingresar.html");
	});
	$("#colsultar").click(function() {
		$("#cargo").load("includes/consultar.html");
	});
	$("#validar").click(function() {
		$("#cargo").load("includes/validar.html");
	});
	$("#perfiles").click(function() {
		$("#cargo").load("includes/perfiles.html");
	});

  	$("#votar").click(function() {
		$("#contenido").load("php/Votar/votar.php");
	});
	$("#resul").click(function() {
		$("#contenido").load("php/Votar/resul.php");
	});
	$("#volver").click(function() {
		$("#contenido").load("php/Votar/votar.php");
	});



}
	