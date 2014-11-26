<head><title> Resultados De Las Votaciones</title><center>
<meta charset="utf-8">

<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="js/funciones.js"></script>
<script language="javascript">	             
			$(document).ready(MenuCiudadanos);
		</script>

</head>

<?php 
   mysql_connect("localhost","root","") or die(mysql_error());
   mysql_select_db("registraduria") or die(mysql_error());
   $result=mysql_query("select * from  votaciones"); 
?>

<TABLE BORDER=0 CELLSPACING=1 CELLPADDING=1 align="center" id='table'> 


<?php 
    

   while($row = mysql_fetch_array($result)) { 
      printf("<tr><td><br><font  size='6'>Por <b>'%s'</b> se han obtenido: <b>%s</b> votos</font></td></tr>",$row["nombre"],$row["clicks"]);
}    
   mysql_free_result($result); 

?> 
<a  href="#" ><img src="images/resultados.png" width="280" height="210" />
 </a>
<h1>Resultados<h1>

</table>
<br>
<a  id="volver" href="#" ><img src="images/votar.png" width="250" height="140" />
 </a>

</center>