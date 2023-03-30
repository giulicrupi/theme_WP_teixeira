	<?php 

		$imgCard = get_field('imagem_do_card');
	 ?>

	<div class="card-prod">
		<a href="<?php echo site_url(); ?>/produto/apogeo/">
		<div class="conteudo" >
			<div class="categoria">
				<?php 

					$terms = get_the_terms( $post->ID, 'produtos-categoria' );
					if ( !empty( $terms ) ){
					    // get the first term
					    $term = array_shift( $terms );
					      echo '<p >' . $term->name . '</p>';
					}

				 ?>	
			</div>
			<div class="imagem" style="background-image: url(<?php echo $imgCard['url']; ?>);">
				<div class="overlay">
					<div class="desc">
						<div class="infos">
							<p class="nome-prod"><?php the_title(); ?></p>
							<p class="bairro"><?php the_field('bairro'); ?></p>
							<p class="comando"><?php the_field('comando_de_produto'); ?></p>
							<p class="metragem"><?php the_field('metragem'); ?></p>										
						</div>	
						<div class="conheca">
							
								<button>Conheça</button>
							
						</div>
					</div>								
				</div>
			</div>
		</div>
		</a>
	</div>