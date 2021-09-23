<?php get_header(); ?>
			
<main style="margin-top: -2%;">
	<?php echo do_shortcode('[rev_slider alias="slide"]'); ?>
</main>
<section class="sect1">
	<div class="container" id="conceito">
		<div class="row">
			<div class="col-lg-6 col-12 col-espaco">
				<hr>
				<div class="left-col">

					<div class="texto-incial">
						<h2>
							DE <br>
							SI <br>
							GN

						</h2>
						<p class="texto-desc">
							em uma das ruas<br>
							mais emblemáticas do bairro,<br>
							a personificação do belo.						
						</p>					
					</div>
				</div> 
				<hr>
				<img src="<?php echo site_url(); ?>/wp-content/uploads/2021/09/comando.png" alt="Comando de Produto - Indiana 316" class="comando">			
			</div>
			<div class="col-lg-6 col-12 col-right">
				<img src="<?php echo site_url(); ?>/wp-content/uploads/2021/09/predio.png" alt="Prédio - Indiana Indiana 316" class="img-fluid">
			</div>
		</div>
	</div>
</section>
<section class="sect2" style="background: linear-gradient(to bottom,rgba(0,0,0, 0),rgb(0 0 0 / 73%)),url(<?php echo site_url(); ?>/wp-content/uploads/2021/09/piscina.jpg);">
	<div class="container" >
		<div class="textos">
			<h2>
				EN <br>
				CAN <br>
				TA <br>
				DOR
			</h2>
			<p class="texto-desc">
			é como se
			o céu e a água <br>
			fossem uma
			coisa só.			
			</p>			
		</div>	
	</div>
</section>
<section class="sect3">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-12">
				<!-- <img src="<?php echo site_url(); ?>/wp-content/uploads/2021/09/implantacao.png" alt=" implantacao" class="img-fluid imp"> -->

				<div class="galeria-imp">

						<?php 
						$imagesImp = get_field('Implantacao');
						if( $imagesImp ): ?>
						   
						        <?php foreach( $imagesImp as $imageImp ): ?>
								<div class="item">
									<a href="<?php echo $imageImp['url']; ?>" data-fancybox="" style="text-decoration: none;">
									<img src="<?php echo $imageImp['url']; ?>" class="img-fluid" alt="<?php echo $imageImp['title']; ?>">
									</a>
									<p class="title-imp"><?php echo $imageImp['title']; ?></p>
								</div>

						                
						            
						        <?php endforeach; ?>
						    
						<?php endif; ?>	

				
				</div>

				<div class="texto">
					<h2>
						COM <br>
						PLE <br>
						TO
					</h2>
				</div>

			</div>
			<div class="col-lg-3 col-12">
			

				<ul>
					<li>ACESSO DE VEÍCULOS</li>
					<li>ACESSO SOCIAL</li>
					<li>UBER PLACE</li>
					<li>COWORKING</li>
					<li>LOBBY</li>
					<li>PET PLACE</li>
					<li>LOCKER/DEPÓSITO</li>
					<li>ESTACIONAMENTO</li>
					<li>QUADRA DE AREIA RECREATIVA</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<section class="sect4" >
	<div class="container" id="apto">
		<div class="row">
			<div class="col-lg-3 col-12" style="    padding-right: 3%;">
				<div class="texto">
					<h2>
						ESPE <br>
						TÁCU <br>
						LAR
					</h2>
					<p class="text-desc">Seus olhos encontram <br>o horizonte.</p>
				</div>
			</div>
			<div class="col-lg-9 col-12 c-right">

				<div class="galeria-imp">

						<?php 
						$imagesApt = get_field('galeria_apto');
						if( $imagesApt ): ?>
						   
						        <?php foreach( $imagesApt as $imageApt ): ?>
								<div class="item">
									<a href="<?php echo $imageApt['url']; ?>" data-fancybox="" style="text-decoration: none;">
									<img src="<?php echo $imageApt['url']; ?>" class="img-fluid" alt="<?php echo $imageApt['title']; ?>">
									</a>
									<p class="title-imp"><?php echo $imageApt['title']; ?></p>
								</div>

						                
						            
						        <?php endforeach; ?>
						    
						<?php endif; ?>	

				
				</div>				
			</div>
		</div>
	</div>
</section>
<section class="sect5">
	<div class="container" id="area">
		<div class="row">
			<div class="col-lg-3 col-12 col-mob">
					<h2>
						ÚNI <br>
						CO
					</h2>
					<p class="text-desc">
						a primeira impressão <br>
						será definitiva.
					</p>
					<p><small>Arrojado, contemporâneo e completo. <br>
Essas são as primeiras impressões que o refinado
Indiana 316 irá proporcionar  aos moradores e visitantes. </small></p>				
			</div>				

			<div class="col-lg-9  col-12 c-right">

				<div class="galeria-imp">

						<?php 
						$imageslaz = get_field('galeria_lazer');
						if( $imageslaz ): ?>
						   
						        <?php foreach( $imageslaz as $imagelaz ): ?>
								<div class="item">
									<a href="<?php echo $imagelaz['url']; ?>" data-fancybox="" style="text-decoration: none;">
									<img src="<?php echo $imagelaz['url']; ?>" class="img-fluid" alt="<?php echo $imagelaz['title']; ?>">
									</a>
									<p class="title-imp"><?php echo $imagelaz['title']; ?></p>
								</div>

						                
						            
						        <?php endforeach; ?>
						    
						<?php endif; ?>	

				
				</div>				
			</div>
			<div class="col-lg-3 col-12 col-desk">
					<h2>
						ÚNI <br>
						CO
					</h2>
					<p class="text-desc">
						a primeira impressão <br>
						será definitiva.
					</p>
					<p><small>Arrojado, contemporâneo e completo. <br>
Essas são as primeiras impressões que o refinado
Indiana 316 irá proporcionar  aos moradores e visitantes. </small></p>				
			</div>			
		</div>					
	</div>
</section>
<section class="sect6" id="local">
	<div class="container-fluid">
		<img src="<?php echo site_url(); ?>/wp-content/uploads/2021/09/local.jpg" alt="localização - Indiana 316" class="img-fluid py-2" >
		<div class="texto text-center" style="padding-bottom: 2%;padding-top: 2%;">
			<h4 style="text-transform: uppercase;letter-spacing: 1px;">Endereço:</h4>
			<p>RUA  INDIANA, 316 - BROOKLIN</p>			
		</div>
	</div>
</section>									
<section class="contato" id="contato">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-12">
				<p>Cadastre-se para saber mais:</p>
				<div class="form">
					<?php echo do_shortcode('[contact-form-7 id="46" title="Formulário de contato 1"]'); ?>
				</div>				
			</div>
			<div class="col-lg-6 col-12">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3655.763555802346!2d-46.68382158502126!3d-23.61281128465744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce50ba9742d1eb%3A0xe63e6c15c0bbf685!2sR.%20Indiana%2C%20316%20-%20Brooklin%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2004562-000!5e0!3m2!1spt-BR!2sbr!4v1632403170522!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>
