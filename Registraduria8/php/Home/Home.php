<!DOCTYPE html>
<html>
<head>

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
<body>
	<div id="slider">
	<div><img src="images/banner2.png" alt="image 1" width="100%" /></div>
	<div><img src="images/imagen2.png" alt="image 2"  width="100%"/></div>
	<div><img src="images/imagen3.png" alt="image 3"  width="100%"/></div>
	<div><img src="images/imagen4.png" alt="image 3"  width="100%" height="198px"/></div>
	
</div>
	
	<br><br><br>	

<img src="images/imageni.png" align="right" height="1010" width="1000" >

	
	
  	<div > <iframe width="470" height="290"  src="http://www.youtube.com/embed/dFOKOoQsxyI" frameborder="3" ></iframe> 
<br><br><br>
<div > <iframe width="470" height="290" src="http://www.youtube.com/embed/dPGTmLdYAqQ" frameborder="3" ></iframe> 
  	<br><br><br>
  	<div > <iframe width="470" height="290" src="http://www.youtube.com/embed/HPjwslH-nA4" frameborder="3" ></iframe> 
  	  	

  	
	  
	   </div> 
</body>
</html>