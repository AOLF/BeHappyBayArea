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
	<link rel="stylesheet" href="css/bootstrap-health.css" />
	<link rel="stylesheet" href="css/styles-health.css" />

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicon and Apple Touch Icons -->
    <link rel="shortcut icon" href="http://cdn.artofliving.org/sites/www.artofliving.org/files/aolglobal_favicon_9.ico" type="image/x-icon">
<!--	<link rel="apple-touch-icon" href="images/icons/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/icons/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/icons/apple-touch-icon-114x114.png">-->
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
					<h1>"Tener Buena Salud est� a una Respiraci�n de Distancia"</h1>

	
			
			</div> <!-- end span8 -->
			
		</div> <!-- end row -->
	</header> <!-- end container -->
	
	<!-- BANNER -->	<div class="banner-container">
	
	  <div class="container">
		
		<div class="row">
			
				<div class="span7 clearfix header-contents">
				
<div class="product-header-signup" style="padding:10px;color:black;">
				
					<h1>Aprende los Secretos de la Respiraci�n</h1>
		<img src="images/photo-health-featured.jpg" alt="Bottom Line" width="48%" />
           
<div style="float:right;width:50%;">
				<ul class="header-benefits" style="color:#0A3B6E;">
				    <li><i class="icon-ok"></i>Cuando est�s enfermo tu respiracion se vuelve irregular. Con diferentes ritmos de respiraci�n tu puedes liberarte de tensiones, relajar el sistema nervioso centrar, y lograr una experiencia de vida saludable.</li>
						<li><i class="icon-ok"></i>El dolor en el cuerpo se puede combatir concentrando tu atenci�n en la molestia y con una serie de respiraciones profundas podras aliviarlo.</li>
					<li><i class="icon-ok"></i> Toda emoci�n tiene un patr�n de respiraci�n correspondiente. A trav�s de la respiraci�n puedes mejorar tu estado de salud mental y emocional.</li>

</ul>	
</div>
<div style="clear:both;"></div>
					</div>
<p></p>
<h3 style="margin: 60px 70px 20px 20px;">Cual es la conexi�n entre la respiraci�n y la salud?</h3>
					<ul class="header-benefits">
			<li><i class="icon-ok"></i> Tu respiraci�n es una fuente de energ�a. Si tu cuerpo esta cansado o te sientes deprimido, a trav�s de la respiraci�n puedes recomponer tu estado</li>				
						<li><i class="icon-ok"></i> Puedes eliminar t�xinas y estres acumulado respirando mejor</li>
						<li><i class="icon-ok"></i> Tu respiraci�n, mente y vida estan conectados. Conociendo los secretos de la respiraci�n, hay alegria y paz en la mente y la vida se vuelve una celebraci�n</li>
					</ul>	
                    
                <p style="color:#FFF"> El curso de la Fundación El Arte de Vivir te capacita con el conocimiento y las técnicas para que descubras una nueva dimensión en tu interior utilizando el poder de tu respiraci�n. Con la pr�ctica de estas t�cnicas puedes volver a la calma, relajaci�n, siendo m�s efectivo y eficiente en lo que hagas. Por supuesto, decididamente vas a sonreir m�s.</p>    
							
				</div> <!-- end span4 -->
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
					
						<h2> Habla con un Experto <span><br>
				      Sin Cargo!</span></h2>
						
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
							<input type='button' onclick='check()'  value='CONSULTAR AHORA'>
						
						
					  </div> <!-- end header-cta -->
						
					</div> <!-- end product-header-signup -->
					
	<img src="images/image-sidebar.jpg" width="304" height="" align="left">
					
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





	<!-- JS -->
	<script src="js/jquery-1.8.0.min.js"></script>
	<script src="js/functions.js"></script>

</body>
</html>