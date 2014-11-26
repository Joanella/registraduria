function Ciudadanos(){
}
$("#grabar").click(function(){			
		var datos=$("#fciudadanos").serialize();
		alert(datos);
		$.ajax({
			type:"post",
			url:"php/Ciudadanos/ControllerCiudadanos.php",
			data:datos,
			dataType:"html",
			success:function(result){
			       alert("Enhorabuena! ya estas registrado");
                               $("#contenido").load('php/Ciudadanos/Ciudadanos.php');
			}
		})
	});	
function load(str)
{
var xmlhttp;

if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
}
}
xmlhttp.open("POST","php/Ciudadanos/SelectCiudad.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("q="+str);
}

function load2(str)
{
var xmlhttp;

if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("Comuna").innerHTML=xmlhttp.responseText;
}
}
xmlhttp.open("POST","php/Ciudadanos/SelectComuna.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("Munici_codigo="+str);
}

function load3(str)
{
var xmlhttp;

if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("Barrio").innerHTML=xmlhttp.responseText;
}
}
xmlhttp.open("POST","php/Ciudadanos/SelectBarrio.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("Comuna_codigo="+str);
}
$(document).ready(function(){
		$( "#tabs" ).tabs();
		$( "#ciudadano_fecha_nacimiento" ).datepicker();
		$("#fciudadanos").validate({
			rules: {
    			ciudadano_nombres: {
      				required: true,
      				textonly: true
    			},
    			ciudadano_cedula: {
      				required: true,
      				number: true
    			},
				ciudadano_telefono: {
      				required: true,
      				number: true
    			},
				ciudadano_fecha_nacimiento: {
      				required: true
    			},
				ciudadano_celular: {
      				required: true,
      				number: true
    			},
				usuario_contraseña: "required",
				Depa_codigo:"required",
    			password_again: {
      				required: true,
					equalTo: "#usuario_contrasena"
    			}
  			},
			messages:{
				ciudadano_nombres: {
					required: "Dato obligatorio",
					textonly: "Sólo letras"
				},
				ciudadano_cedula: {
					required: "Dato obligatorio",
					number: "Sólo datos numéricos"
				},
				usuario_contraseña: {
					required: "Dato obligatorio"
				},
				password_again: {
					required: "Dato obligatorio",
					equalTo: "Contraseña Diferente"
				},
				ciudadano_telefono: {
      				required: "Dato obligatorio",
					number: "Sólo datos numéricos"
    			},
				ciudadano_fecha_nacimiento: {
      				required: "Dato obligatorio"
    			},
				ciudadano_celular: {
      				required: "Dato obligatorio",
					number: "Sólo datos numéricos"
    			},
				Depa_codigo:{
      				required:  "Dato obligatorio"					
				}
			},
			submitHandler: function(form) {
  				 alert("Todo Bien");
				$(document).ready(Ciudadanos);
 			}	
		});
jQuery.validator.addMethod(
"textonly", 
function(value, element)
{
    valid = false;
    check = /[^-\.a-zA-Z\s\u00C0-\u00D6\u00D8-\u00F6\u00F8-\u02AE]/.test(value);
    if(check==false)
        valid = true;
    return this.optional(element) || valid;
}, 
jQuery.format("Solo letras.")
);

		
		$("#fciudadanos").validate({
			submitHandler: function(form) {
  				 alert("Todo Bien");
 			}
		});
	});
