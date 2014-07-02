<script src="web/js/responsiveslides.min.js"></script>


<section>
	<div id="ConteSection">
		<h1><strong class="txtAzulO">Nuestros </strong> <span class="txtAzul">Clientes</span></h1>
		<p>
			Actualmente <strong class="txtAzul">intermedimos a mas de 320 empresas</strong> en todo el país, manejando los Riesgos Profesionales de mas de 40.000 empleados .
Entre sus principales clientes se cuentan:
		</p>
	</div>

	<div id="ConteClientes">
		<div id="ConteBoxSlider">

			<div id="bxslider">
		  
				<div class="Cliente">
					<img src="assets/img/Clientes/dell.png" alt="">
				</div>
				<div class="Cliente">
					<img src="assets/img/Clientes/grantierra.png" alt="">
				</div>
				<div class="Cliente">
					<img src="assets/img/Clientes/subaru.png" alt="">
				</div>
				<div class="Cliente">
					<img src="assets/img/Clientes/integral.png" alt="">
				</div>
				<div class="Cliente">
					<img src="assets/img/Clientes/pepeganga.png" alt="">
				</div>
				<div class="Cliente">
					<img src="assets/img/Clientes/beercompany.png" alt="">
				</div>
				<div class="Cliente">
					<img src="assets/img/Clientes/showplace.png" alt="">
				</div>

			</div>
			
		</div>
		
	</div>

<br>
<br>
				<!----//End-slider-script---->
			<!-- Slideshow 4 -->
			      <ul class="rslides" id="slider4">
			        <li>
			          <img src="assets/img/slide1.jpg" alt="">
			          <div class="caption">
			          	<div class="slide-text-info">
			          		<span>
			          			<strong>Asesoría en la escogencia de ARL</strong> dentro de un mercado altamente segmentado y 
			          		</span>
			          		<span>
			          			con grandes diferencias en los <strong>términos económicos de las ofertas</strong>
			          		</span>
			          	</div>
			          </div>
			        </li>
			        <li>
			          <img src="assets/img/slide2.jpg" alt="">
			          <div class="caption">
			          	<div class="slide-text-info">
			          		<span>Negociación del <strong>porcentaje del recurso con la ARL.</strong> Esta negociación se apalanca</span>
			          		<span>en el volumen de negocios del intermediario</span>
			          	</div>
			          </div>
			        </li>
			        <li>
			          <img src="assets/img/slide3.jpg" alt="">
			           <div class="caption">
			           	<div class="slide-text-info">
			          		<span id="clientes">Algunos de nuestros <strong>clientes</strong></span>
			          	</div>
			          </div>
			        </li>
			      </ul>
			<!----- //End-slider---->
</section>
<script>
	$(document).ready(function(){
	      $("#Clientes").addClass("Activo");	


	         if($("#bxslider").size()>0){
	      $("#bxslider").bxSlider({
			  minSlides: 3,
			  maxSlides: 4,
			  slideWidth: 'auto',
			  responsive: true,
			  pager:false,
			  auto:true,
			  slideMargin: 10
	      });
   };



	});



</script>

