<?php get_header(); ?>
<?php 

	$imagemBanner = get_field('imagem_do_banner');
	$logoProd = get_field('Logo do banner');
 ?>
<section class="banner-prod" style="background-image: url(<?php echo $imagemBanner['url']; ?>);">
	<div class="overlay">
		<div class="container">
			<div class="alinhar">
				<div class="logo-prod" style="background-image: url(<?php echo $logoProd['url']; ?>);">
					opa
				</div>					
			</div>
		</div>		
	</div>
</section>
<section class="sect1-prod" style="background-image: url(<?php echo site_url(); ?>/wp-content/uploads/2022/09/forma.png);">
	<div class="container">
		
		<p class="title"><?php the_title(); ?></p>
		<div class="conteudo">
			<div class="traco"></div>
			<div class="texto-conceito">
				<?php the_field('texto_conceito'); ?>
			</div>	
			<div class="row">
				<div class="col-lg-4">
					<div class="topico text-center">
						<img src="<?php echo site_url(); ?>/wp-content/uploads/2022/09/dorms.png" alt="" class="img-fluid icon">
						<p class="comando">
							<?php the_field('comando_de_produto'); ?>
						</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="topico text-center">
						<img src="<?php echo site_url(); ?>/wp-content/uploads/2022/09/area.png" alt="" class="img-fluid icon">
						<p class="comando">
							<?php the_field('metragem'); ?>
						</p>
					</div>					
				</div>
				<div class="col-lg-4">
					<div class="topico text-center">
						<img src="<?php echo site_url(); ?>/wp-content/uploads/2022/09/vagas.png" alt="" class="img-fluid icon">
						<p class="comando">
							<?php the_field('vagas'); ?>
						</p>
					</div>					
				</div>
			</div>					
		</div>
	</div>
</section>
<section class="sect2-prod">
	<div class="container">

			<p class="title text-center">Galeria de imagens</p>
			<!-- partial:index.partial.html -->
			<ul class="nav nav-tabs" id="myTab" role="tablist">
			
			  <li class="nav-item">
			    <a class="nav-link active" id="fachada-tab" data-toggle="tab" href="#fachada" role="tab" aria-controls="fachada" aria-selected="true">Fachada</a>
			  </li>
		 
		<?php 

		$aptos = get_field('galeria_de_apto', false);
			if (!empty($aptos)) {
		 ?>			 
			  <li class="nav-item">
			    <a class="nav-link" id="apto-tab" data-toggle="tab" href="#apto" role="tab" aria-controls="apto" aria-selected="false">Área Interna</a>
			  </li>
		<?php } ?>
		<?php 

		$areaC = get_field('galeria_de_area_comum', false);
			if (!empty($areaC)) {
		 ?>						  
			  <li class="nav-item">
			    <a class="nav-link" id="area-tab" data-toggle="tab" href="#area" role="tab" aria-controls="area" aria-selected="false">Área Comum</a>
			  </li>
		<?php } ?>	  
		<?php 

		$impS = get_field('galeria_de_implantacoes', false);
			if (!empty($impS)) {
		 ?>				  
			  <li class="nav-item">
			    <a class="nav-link" id="imp-tab" data-toggle="tab" href="#imp" role="tab" aria-controls="imp" aria-selected="false">Implantação</a>
			  </li>	
		<?php } ?>	  		  
			</ul>
			<div class="tab-content" id="myTabContent">

			  <div class="tab-pane fade " id="fachada" role="tabpanel" aria-labelledby="fachada-tab">
			    <div class="apto">

	
						<?php 
						$images = get_field('galeria_de_fachada');
						if( $images ): ?>
						
					        <?php foreach( $images as $image ): ?>

					        	<div class="item">
					        		
					        		<a href="<?php echo $image['url']; ?>" data-caption="" data-fancybox="galeria-fachada">
						        		<div class="img" style="background-image: url(<?php echo $image['url']; ?>);">
	        									
						        		</div>
					        		</a>
					        	</div>


					        <?php endforeach; ?>
						
						<?php endif; ?>
			    </div>
			  </div>



			  <div class="tab-pane fade" id="apto" role="tabpanel" aria-labelledby="apto-tab">
			    <div class="apto">
						<?php 
						$images = get_field('galeria_de_apto');
						if( $images ): ?>
						
					        <?php foreach( $images as $image ): ?>

					        	<div class="item">
				        		
					        		<a href="<?php echo $image['url']; ?>" data-caption="" data-fancybox="galeria-apto">
						        		<div class="img" style="background-image: url(<?php echo $image['url']; ?>);">
	        													        			
						        		</div>
					        		</a>
					        	</div>


					        <?php endforeach; ?>
						
						<?php endif; ?>
			    </div>
			  </div>



			  <div class="tab-pane fade" id="area" role="tabpanel" aria-labelledby="area-tab">
			  	<div class="apto">
						<?php 
						$images = get_field('galeria_de_area_comum');
						if( $images ): ?>
						
					        <?php foreach( $images as $image ): ?>

					        	<div class="item">
					        		
					        		<a href="<?php echo $image['url']; ?>" data-caption="" data-fancybox="galeria-area">
						        		<div class="img" style="background-image: url(<?php echo $image['url']; ?>);">
	        														        			
						        		</div>
					        		</a>
					        	</div>


					        <?php endforeach; ?>
						
						<?php endif; ?>			  		
			  	</div>
			  </div>
			  <div class="tab-pane fade" id="imp" role="tabpanel" aria-labelledby="imp-tab">
			  	<div class="apto">
						<?php 
						$images = get_field('galeria_de_implantacoes');
						if( $images ): ?>
						
					        <?php foreach( $images as $image ): ?>

					        	<div class="item">

					        		<a href="<?php echo $image['url']; ?>" data-caption="" data-fancybox="galeria-imp">
						        		<div class="img" style="background-image: url(<?php echo $image['url']; ?>);">
																        			
						        		</div>
					        		</a>
					        	</div>


					        <?php endforeach; ?>
						
						<?php endif; ?>			  		
			  	</div>
			  </div>			  
			</div>		
	</div>
</section>
<section class="sect3-prod">
	<div class="container text-center">
		<p class="title">Itens de lazer</p>
		
			<?php if( have_rows('itens_de_lazer') ): ?>
			    <?php while( have_rows('itens_de_lazer') ): the_row(); 


			        ?>
			        <p class="chamada-de-lazer">
			        	<?php the_sub_field('chamada_de_lazer'); ?>
			        </p>
			        <p class="itens-de-lazer">
			        	<?php the_sub_field('itens_de_lazer'); ?>
			        </p>			        
			    <?php endwhile; ?>
			<?php endif; ?>		
	</div>
</section>	
<section class="sect4-prod">
	<div class="container">

			<p class="title text-center">Plantas</p>
			<!-- partial:index.partial.html -->
			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<?php if( have_rows('plantas') ): ?>
				   	<?php $cont = 0; ?>
				    <?php while( have_rows('plantas') ): the_row();  ?>
				    	<?php 
				    	
				    	$cont++; 
				    	?>
					  <li class="nav-item">
					    <a class="nav-link " id="teste<?php echo $cont; ?>-tab" data-toggle="tab" href="#teste<?php echo $cont; ?>" role="tab" aria-controls="teste<?php echo $cont; ?>" aria-selected="true"> <?php the_sub_field('nome_da_planta'); ?></a>
					  </li>		
			    <?php endwhile; ?>
			    
			<?php endif; ?>					  		 	 		  
			</ul>



			<div class="tab-content" id="myTabContent">
				<?php if( have_rows('plantas') ): ?>
				   	<?php $cont2 = 0; ?>
				    <?php while( have_rows('plantas') ): the_row();  ?>
				    	<?php 
				    	
				    	$cont2++; 
				    	$imgPlanta = get_sub_field('imagem_da_planta');
				    	?>
					  <div class="tab-pane fade " id="teste<?php echo $cont2; ?>" role="tabpanel" aria-labelledby="teste<?php echo $cont2; ?>-tab">
						  	<a href="<?php echo $imgPlanta['url'];  ?>" data-caption="" data-fancybox="">
							   <div class="planta" style="background-image: url(<?php echo $imgPlanta['url'];  ?>);">
							   		
							   </div>
							</a>   
					  </div>

				    <?php endwhile; ?>
				    
				<?php endif; ?>				  
			  
			</div>		
	</div>
</section>	
<section class="sectvideo-prod">
	<div class="container">

			<p class="title text-center">Vídeo & Tour Virtual</p>
			<!-- partial:index.partial.html -->
			<ul class="nav nav-tabs" id="myTab" role="tablist">

					  <li class="nav-item">
					    <a class="nav-link active" id="video-tab" data-toggle="tab" href="#video" role="tab" aria-controls="video" aria-selected="true">Vídeo </a>
					  </li>	
					  <li class="nav-item">
					    <a class="nav-link " id="tour-tab" data-toggle="tab" href="#tour" role="tab" aria-controls="tour" aria-selected="true">Tour 360º </a>
					  </li>						  	
			  		 	 		  
			</ul>



			<div class="tab-content" id="myTabContent">

					  <div class="tab-pane fade " id="video" role="tabpanel" aria-labelledby="video-tab">
						  	<div class="video">
						  		<?php the_field('video'); ?>
						  	</div>
					  </div>	
					  <div class="tab-pane fade " id="tour" role="tabpanel" aria-labelledby="tour-tab">
						  	<div class="tour">
						  		<?php the_field('tour'); ?>
						  	</div>
					  </div>						  	  
			  
			</div>		
	</div>
</section>	
<section class="sect5-prod">
	<div class="container">
		<p class="title text-center">Localização</p>
		<p class="texto text-center">Um verdadeiro marco na Av. Presidente Vargas, na Vila Paraíba e na vida de quem caminhou, conquistou e merece o auge, com a vantagem de ser o melhor investimento da região mais desejada de Guará.</p>
		<div class="mapa">
			<?php the_field('iframe_do_mapa'); ?>
		</div>
		<p class="endereco text-center"> <?php the_field('endereco'); ?> </p>
	</div>
</section>	
<section class="sect6-prod">
	
	<div class="container">
		<p class="title text-center">Quer receber mais informações? Fale conosco!</p>
		<div class="row">
			<div class="col-lg-12">
				<div class="formss">
					<?php echo do_shortcode('[contact-form-7 id="129" title="receba infos exclusivas"]'); ?>
				</div>
				
			</div>
		</div>
	</div>
</section>
<section class="sect7-prod" id="simule">
	
	<div class="container">
		<p class="title text-center">Simule agora o seu financiamento</p>
		<div class="row">
			<div class="col-lg-12">
				<div class="formss">
					<?php echo do_shortcode('[contact-form-7 id="128" title="Simule"]'); ?>
				</div>
				
			</div>
		</div>
	</div>
</section>
<section class="sect8-prod">
	<div class="container text-center">
		<p class="texto-legal"> <small><?php the_field('texto_legal'); ?></small> </p>
	</div>
</section>		
<?php get_footer(); ?>
