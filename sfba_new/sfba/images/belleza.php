<!DOCTYPE html>

<html lang="es">
<head>
	<meta charset="iso-8859-1">
	<title>Salud</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/reset.css" />
	<link rel="stylesheet" href="css/bootstrap-beauty.css" />
	<link rel="stylesheet" href="css/styles-beauty.css" />
    <link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />
     <link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" />
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicon and Apple Touch Icons -->
    <link rel="shortcut icon" href="http://cdn.artofliving.org/sites/www.artofliving.org/files/aolglobal_favicon_9.ico" type="image/x-icon">
    	<!-- JS -->
<!--	<link rel="apple-touch-icon" href="images/icons/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/icons/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/icons/apple-touch-icon-114x114.png">-->

    
  
</head>
<body>

	<!-- HEADER -->
	<header class="container" id="top">
		<div class="row">
		
			<div class="span4">
			
				<h1 class="logo"><a href="" class="ir">El Arte de Vivir</a></h1>
				</div> <!-- end span4 -->
			
		<div class="span8">
			<br><br>
					<h1>"Si&eacute;ntete M&aacute;s Bella, Solo Respira"</h1>

	
			
			</div> <!-- end span8 -->
			
		</div> <!-- end row -->
	</header> <!-- end container -->
	
	<!-- BANNER -->	<div class="banner-container">
	
	  <div class="container">
		
		<div class="row">
			
				<div class="span7 clearfix header-contents">
<h1>Obt&eacute;n un Resplandor Natural</h1>

     <div class="slider-wrapper theme-default">
        <div id="slider" class="nivoSlider" style="width:100%">
          <img src="images/one.jpg" data-thumb="images/one.jpg" title="A trav�s de la respiraci�n puedes mejorar tu estado de Salud Mental, Emocional y F�sico" />
          <img src="images/two.jpg" data-thumb="images/two.jpg" alt="" title="Con diferentes ritmos de respiraci�n puedes liberarte de tensiones, dolor y estr�s" />
          <img src="images/three.jpg" data-thumb="images/three.jpg" alt="" title="Experimenta lo que Millones en el Mundo ya han Sentido" />
          <img src="images/four.jpg" data-thumb="images/four.jpg" alt="" title="Mu�vete Ahora! Est�s a tan solo un par de clics de distancia" />
          </div>
        <div id="htmlcaption" class="nivo-html-caption">
          <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>. 
          </div>
        </div>
    
<div style="clear:both;"></div>
					
<div class="clearfix"></div>
<h3 style="margin: 30px 0px 30px 0;">Cual es la conexi�n entre la respiraci�n y la salud?</h3>
				  <ul class="header-benefits">
			<li><i class="icon-ok"></i> Tu respiraci�n es una fuente de energ�a. Si tu cuerpo esta cansado o te sientes deprimido, a trav�s de la respiraci�n puedes recomponer tu estado</li>				
						<li><i class="icon-ok"></i> Puedes eliminar t�xinas y estres acumulado respirando mejor</li>
						<li><i class="icon-ok"></i> Tu respiraci�n, mente y vida estan conectados. Conociendo los secretos de la respiraci�n, hay alegria y paz en la mente y la vida se vuelve una celebraci�n</li>
					</ul>	
                    
                <p style="color:#FFF">El curso de la Fundaci�n El Arte de Vivir te capacita con el conocimiento y las t�cnicas para que descubras una nueva dimensi�n en tu interior utilizando el poder de tu respiraci�n. Con la pr�ctica de estas t�cnicas puedes volver a la calma y relajaci�n que te es propia, siendo m�s efectivo y eficiente en lo que hagas.<br>
Por supuesto, decididamente vas a sonreir m�s.</p>
                <p style="color:#FFF">Este curso ya lo han tomado millones de personas alrededor del mundo, alcanzando un estado de paz interna que durante mucho tiempo han buscado. Much�mos han compartido milagrosas experiencias de sanaci�n como resultado de la meditaci�n.  </p>
                <p style="color:#FFF">"Un cuerpo libre de enfermedad, una mente libre de estr�s, un intelecto libre de inhibiciones, una memoria libre de traumas, un ego que lo incluya todo y un alma libre de sufrimiento es el derecho natural de todo ser humano" Sri Sri Ravi Shankar</p>    
							
          </div> 
				<!-- end span4 -->
	<?php
include("connection.php");
$name= $_POST['name'];
$email= $_POST['email'];
$phone= $_POST['phone'];

$subject = "thanks for registering";
$message = "Hello! This is a simple email message.";
$from = "webmaster@artofliving.org";
$headers = "From:" . $from;
if($name!='' && $email !='' && $phone !=''){
mail($email,$subject,$message,$headers);
$query ="insert into interested_master (name, phone,email)values('" . $name . "','" . $phone. "','" . $email. "')";
//echo $query;
$result = mysql_query($query,$con);
echo '<font color="orange">&nbsp;&nbsp;<b>Thank you for registering with us!</b></font>';
}
?>


						<script language='javascript'>
function check(){
if(document.forms[0].name.value.length ==0 || document.forms[0].email.value.length ==0 || document.forms[0].phone.value.length ==0 ){
alert("Please enter all the values");

}else{
document.forms[0].submit();
}
}
</script>				
				<div class="span5">
				
					<div class="product-header-signup">
					
						<h2> Vive Saludablemente <span><br>
				      Aprende a Respirar!</span></h2>
						
						<form action="#" method="post" id="signup-form">
						
							<p>
							  <label for="signup-name">Su Nombre:</label>
							<input type="text" name="name" id="signup-name" /></p>
						
							<p>
							  <label for="signup-email">Su Direccion de Correo:</label>
							<input type="email" name="email" id="signup-email" /></p>
<p>
							  <label for="signup-phone">Tel�fono:</label>
							<input type="text" name="phone" id="signup-email" /></p>
								
						</form>

						<div class="header-cta">
						
							<!--<a href="" class="big-button" id="signup-submit">CONSULTAR AHORA<i class="icon-chevron-right"></i></a>-->
							<input type='button' class="big-button" id="signup-submit" onclick='check()'  value='CONSULTAR AHORA'>
						
						
					  </div> <!-- end header-cta -->
						
					</div> <!-- end product-header-signup -->
					
	<img src="images/image-sidebar.jpg" width="304" height="" align="left"  style="margin: 30px 0 0 0 ">
					
		  </div>
					
					
		</div> <!-- end span8 -->
			
	  </div> <!-- end row -->
        </div> 
		<!-- end container -->
		
	</div> <!-- end banner-container -->
	
	
	
	<!-- COPYRIGHT -->
	<div class="copyright-container">
	
		<p>&copy; 2012 Art Of Living Foundation.</p>
		<p class="link-go-top"><a href="#top">go to top</a></p>
	
	</div> <!-- end footer-container -->





    <script type="text/javascript" src="scripts/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="jquery.nivo.slider.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
	<script src="js/functions.js"></script>
    
	<script type="text/javascript">
	
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', '']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	
	</script>
</body>
</html>