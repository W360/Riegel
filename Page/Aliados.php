<script src="web/js/responsiveslides.min.js"></script>


<section>
	<div id="ConteSection">
		<h1><strong class="txtAzulO">Nuestros </strong> <span class="txtAzul">Aliados</span></h1>
	</div>

	<div id="ConteClientes">
		<div id="ConteBoxSlider">

			<div id="bxslider">
		  
				<div class="Cliente">
					<img src="assets/img/Logos/Mapfre.png" alt="">
				</div>
				<div class="Cliente">
					<img src="assets/img/Logos/Bolivar.png" alt="">
				</div>
				<div class="Cliente">
					<img src="assets/img/Logos/Liberty.png" alt="">
				</div>
				<div class="Cliente">
					<img src="assets/img/Logos/Colpatria.png" alt="">
				</div>
				<div class="Cliente">
					<img src="assets/img/Logos/Sura.png" alt="">
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
	      $("#Aliados").addClass("Activo");	


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

