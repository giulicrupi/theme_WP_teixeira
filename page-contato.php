<?php get_header(); ?>
	<main>
		<?php echo do_shortcode('[rev_slider alias="contato"]'); ?>
	</main>
	<section class="sect1-contato">
		<div class="container">
			




			
				
					<div class="top">
						<ul class="nav nav-tabs" id="myTab" role="tablist">
						  <li class="nav-item">
						    <a class="nav-link active" id="trabalhe-tab" data-toggle="tab" href="#trabalhe" role="tab" aria-controls="trabalhe" aria-selected="true">
						    	<div class="conteudo">
						    		<div class="align">
							    		<img src="<?php echo site_url(); ?>/wp-content/uploads/2022/09/trabalhe.png" alt="" class="img-fluid">
							    		<p class="t-contato">Trabalhe Conosco</p>						    			
						    		</div>
						    	</div>
						    </a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link" id="venda-tab" data-toggle="tab" href="#venda" role="tab" aria-controls="venda" aria-selected="false">
					    		<div class="conteudo">
					    			<div class="align">
							    		<img src="<?php echo site_url(); ?>/wp-content/uploads/2022/09/terreno.png" alt="" class="img-fluid">
							    		<p class="t-contato">Venda seu Terreno</p>					    				
					    			</div>				
						    	</div>
						    </a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link" id="invest-tab" data-toggle="tab" href="#invest" role="tab" aria-controls="invest" aria-selected="false">
					    		<div class="conteudo">
					    			<div class="align">
							    		<img src="<?php echo site_url(); ?>/wp-content/uploads/2022/09/quero-com.png" alt="" class="img-fluid">
							    		<p class="t-contato">Quero Comprar</p>					    				
					    			</div>
						    	</div>
						    </a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link" id="imob-tab" data-toggle="tab" href="#imob" role="tab" aria-controls="imob" aria-selected="false">
				    			<div class="conteudo">
				    				<div class="align">
							    		<img src="<?php echo site_url(); ?>/wp-content/uploads/2022/09/imob.png" alt="" class="img-fluid">
							    		<p class="t-contato">Imobiliárias</p>				    					
				    				</div>
						    	</div>
						    </a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link" id="sim-tab" data-toggle="tab" href="#sim" role="tab" aria-controls="sim" aria-selected="false">
				    			<div class="conteudo">
				    				<div class="align">
							    		<img src="<?php echo site_url(); ?>/wp-content/uploads/2022/09/simule.png" alt="" class="img-fluid">
							    		<p class="t-contato">Simule seu financiamento</p>				    					
				    				</div>
						    	</div>
						    </a>
						  </li>						  	  				  				  
						</ul>							
					</div>							
			
			
					<div class="tab-content" id="myTabContent">
					  <div class="tab-pane fade show active" id="trabalhe" role="tabpanel" aria-labelledby="trabalhe-tab">

					  		<div class="container">
					  			<p class="chamada text-center">
									Faça parte de nossa empresa. <br>
									Nos envie seu currículo e entraremos em contato					  				
					  			</p>
					  			<div class="form">
					  				<?php echo do_shortcode('[contact-form-7 id="159" title="trabalhe conosco"]'); ?>

					  			</div>
					  		</div>
					  </div>
					  <div class="tab-pane fade" id="venda" role="tabpanel" aria-labelledby="venda-tab">

					  		<div class="container">
					  			<p class="chamada text-center">
									Nos ajude a aumentar nossa área de atuação, <br> envie os dados do seu terreno e entraremos em contato.				  				
					  			</p>
					  			<div class="form">
					  				<?php echo do_shortcode('[contact-form-7 id="160" title="Venda seu Terreno"]'); ?>
					  			</div>
					  		</div>
					  </div>
					  <div class="tab-pane fade" id="invest" role="tabpanel" aria-labelledby="invest-tab">

					  		<div class="container">
					  			<p class="chamada text-center">
									Fale com um de nossos parceiros. <br> Eles irão te ajudar a encontrar o seu imóvel ideal.

				  				
					  			</p>
					  			<div class="form">
					  				<?php echo do_shortcode('[contact-form-7 id="161" title="Quero comprar"]'); ?>
					  			</div>
					  		</div>
					  </div>
					  <div class="tab-pane fade" id="imob" role="tabpanel" aria-labelledby="imob-tab">

					  		<div class="container">
					  			<p class="chamada text-center">
									Nos envie uma mensagem, entraremos <br> em contato o mais breve possível.

				  				
					  			</p>
					  			<div class="form">
					  				<?php echo do_shortcode('[contact-form-7 id="162" title="Imobiliária"]'); ?>
					  			</div>
					  		</div>
					  </div>
					  <div class="tab-pane fade" id="sim" role="tabpanel" aria-labelledby="sim-tab">

					  		<div class="container">
					  			<p class="chamada text-center">
									Simule já seu financiamento

				  				
					  			</p>
					  			<div class="form">
					  				<?php echo do_shortcode('[contact-form-7 id="163" title="Simule pg contato"]'); ?>
					  			</div>
					  		</div>
					  </div>					  
		  				  				  
					</div>						
			
						
		</div>
	</section>
<?php get_footer(); ?>