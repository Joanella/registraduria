<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/png" href="images/colombia.png" />
<title>Registraduria Nacional</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.4.2.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>  
<script type="text/javascript" src="js/Copse_400.font.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript" src="js/imagepreloader.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script src="js/funciones.js"></script>

<script type="text/javascript">

	preloadImages([
	'images/menu1_active.gif',
	'images/menu2_active.gif',
	'images/menu3_active.gif',
	'images/menu4_active.gif',
	'images/marker_right_active.jpg',
	'images/marker_left_active.jpg',
	'images/menu5_active.gif']);
</script>
<script type="text/javascript">
	$(function(){
		$('#slider div:gt(0)').hide();
			setInterval(function(){
				$('#slider div:first-child').fadeOut(1000)
					.next('div').fadeIn(1000)
					.end().appendTo('#slider');
			},4000);
	})
	</script>
</head>
<img src="images/banner.jpg"  height="230" width="100%">
<body id="page1" >
<div class="body1">
	<div class="body2">
		<div class="main">
<!-- header -->
			<header>
				<nav id="menu">
					<ul>
						<li class="nav1" > <a href="#" id="Opc">Home</a></li>
						<li class="nav2">	      <a href="#" id="Opc1">Ciudadanos</a></li>
						<li class="nav3">	      <a href="#" id="Opc2">Candidatos</a></li>
						<li class="nav4">         <a href="#"  id="Opc3">Empresas</a></li>
						<li class="nav5">         <a href="#"  id="Opc4">Jurados</a></li>
					</ul>
	 			</nav>
			</header>
			</div>
		</div>
	</div>

	   <div id="contenido">
	   	<div id="slider">
	<div><img src="images/banner2.png" alt="image 1" width="100%" /></div>
	<div><img src="images/imagen2.png" alt="image 2"  width="100%"/></div>
	<div><img src="images/imagen3.png" alt="image 3"  width="100%"/></div>
	<div><img src="images/imagen4.png" alt="image 3"  width="100%" height="198px"/></div>
	
</div>
	<br><br><br>	

  	<div > <iframe width="470" height="290"  src="http://www.youtube.com/embed/HPjwslH-nA4" frameborder="3" ></iframe> 
<br><br><br>
<div > <iframe width="470" height="290" src="http://www.youtube.com/embed/jlV_F9m3u5Y" frameborder="3" ></iframe> 
  	<br><br><br>
  	<div > <iframe width="470" height="290" src="http://www.youtube.com/embed/avpTHCxU6SE" frameborder="3" ></iframe> 
	   </div> </div>
</body>
</html>