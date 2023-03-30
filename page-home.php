<?php get_header(); ?>
			
<main class="banner">
	<?php echo do_shortcode('[rev_slider alias="banner"]'); ?>
</main>
<?php echo do_shortcode( '[gmw form="1"]' ); ?>


<section class="sect1">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 text-center">
				
				<p class="title">Empreendimentos</p>
				<div class="traco"></div>
			</div>
			<div class="col-lg-7 alinhar">
				<p class="texto">
					Inovar, ousar, modernizar e mudar no ritmo dos novos tempo, para satisfazer nossos clientes. <b>Para surpreender você!</b>
				</p>
			</div>
		</div>
	</div>
</section>
<section class="sect2">
	<?php get_template_part( 'template-aparts/filtro' ); ?>
	<div class="container">
		<div class="row">
			 <?php     

		        $listagem_home = new WP_Query(array(
		        'produtos-destaque' => 'aparecer-na-home',

		        
		        'posts_per_page' => 3)
		        );
		                  

		        if($listagem_home->have_posts()) : 

		            while($listagem_home->have_posts()) : $listagem_home->the_post(); ?>			
						<div class="col-lg-4">
							<?php get_template_part( 'template-aparts/card' ); ?>
						</div>
					<?php endwhile; ?>	
				<?php endif; ?>	
		</div>
	</div>	
</section>
<section class="sect3">
	<div class="container">
		<p class="title text-center">Imóveis para te surpreender!</p>
		<div class="row">
			 <?php     

		        $listagem_home = new WP_Query(array(
		        'produtos-destaque' => 'destaque',

		        
		        'posts_per_page' => 2)
		        );
		                  

		        if($listagem_home->have_posts()) : 

		            while($listagem_home->have_posts()) : $listagem_home->the_post(); 

		            	$logo = get_field('logo_do_produto');
									$images = get_field('galeria_de_imagens'); // get gallery
									$image  = $images[0]; 	            	
		            	?>				
						<div class="col-lg-6">
							<a href="<?php echo site_url(); ?>/produto/apogeo/">
								<div class="card-destaque">
									<div class="conteudo">
										<div class="img" style="background-image: url(<?php echo $image['url']; ?>);">
											
										</div>
										<div class="linha">
											<div class="logo" >
												<div class="logo-img" style="background-image: url(<?php echo $logo['url']; ?>);">
													
												</div>
											</div>
											<div class="status">
												<?php 

													$terms = get_the_terms( $post->ID, 'produtos-categoria' );
													if ( !empty( $terms ) ){
													    // get the first term
													    $term = array_shift( $terms );
													      echo '<p >' . $term->name . '</p>';
													}

												 ?>	
											</div>
										</div>
									</div>
								</div>
							</a>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>		
		</div>
	</div>
</section>
<section class="sect4">
	<div class="container cont">
		<p class="title text-center">Teixeira Pinto: construímos obras, <br>
mas o que concretizamos são sonhos.</p>

	</div>
	<div class="container cont2">
		<div class="row">
			<div class="col-lg-6 p-0">
				<div class="img" style="background-image: url(<?php echo site_url(); ?>/wp-content/uploads/2022/09/AdobeStock_305153212.jpg);">
					
				</div>
			</div>
			<div class="col-lg-6 p-0 verde" style="background-image: url(<?php echo site_url(); ?>/wp-content/uploads/2022/09/bg-verde.jpg);">
				<div class="conteudo">
					<p class="sub-title-t">Teixeira Pinto: Projetando o mundo que buscamos ter.</p>
					<p class="title-t">
						Nosso compromisso é transformar vidas. <b>Construindo ambientes funcionais, acolhedores e confortáveis</b>.
					</p>
					<p class="texto">
						Elaboramos projetos de empreendimentos trabalhando com seriedade e sempre em parceria com nossos clientes, equipe e colaboradores. Sempre construindo o melhor dos mundos para trazer qualidade de vida e superar as expectativas de nossos clientes e colaboradores.
					</p>
					<div class="botao">
						<a href="<?php echo site_url(); ?>/a-empresa/">
							<button>Conheça nossa história</button>
						</a>
					</div>
				</div>
			</div>
		</div>		
	</div>
</section>
<section class="sect5">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<div class="card-topico" style="background-image: url(<?php echo site_url(); ?>/wp-content/uploads/2022/09/AdobeStock_303174053.jpg);">
					<div class="overlay">
						<div class="desc">
							<p class="title-card">Desenvolvimento <br> <b>Imobiliário</b></p>
							<div class="botao">
								<a href="<?php echo site_url(); ?>/a-empresa/#imobiliario">
									<button>Saiba mais</button>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="card-topico" style="background-image: url(<?php echo site_url(); ?>/wp-content/uploads/2022/09/fachada_desenvolvimento-comercial.jpeg);">
					<div class="overlay">
						<div class="desc">
							<p class="title-card">Desenvolvimento <br> <b>SETOR COMERCIAL</b></p>
							<div class="botao">
								<a href="<?php echo site_url(); ?>/a-empresa/#comercial">
									<button>Saiba mais</button>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="card-topico" style="background-image: url(<?php echo site_url(); ?>/wp-content/uploads/2022/09/AdobeStock_332750645.jpg);">
					<div class="overlay">
						<div class="desc">
							<p class="title-card">Desenvolvimento <br> <b>SETOR INDUSTRIAL</b></p>
							<div class="botao">
								<a href="<?php echo site_url(); ?>/a-empresa/#industrial">
									<button>Saiba mais</button>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>						
		</div>
	</div>
</section>
<?php get_footer(); ?>












