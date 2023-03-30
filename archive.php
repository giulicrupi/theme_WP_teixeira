<?php get_header(); ?> 
<main>
	<?php echo do_shortcode('[rev_slider alias="empreendimentos"]'); ?>
</main>
<div class="filtro">
	<?php get_template_part( 'template-aparts/filtro' ); ?>
</div>
	<?php if( have_posts() ) { ?>
		<div class="imoveis" >
			<div class="container">
				<div class="row card3">		

					 

					    <?php while( have_posts() ) : the_post(); $imgCapa = get_field('imagem_de_destaque'); ?>

				    		<div class="col-lg-4">
				    			<?php get_template_part( 'template-aparts/card' ); ?>
				    		</div>




					    <?php endwhile;?>

					    <div class="container">
					    	<?php 
						    echo '<div class="container text-center navs-navigation">';
						    the_posts_pagination( array(
						    	'mid_size'=>3,
							 	'prev_text' => _( '« Anterior'),
							  	'next_text' => _( 'Próxima »'),
							) );
							 echo '</div>';
					    	 ?>
					    </div>



	


					</div>				
				</div>
			</div>	    
	<?php } else{
		echo '<div class="container text-center">';
		echo '<h2>Não possui empreendimento nessa categoria</h2>';
		echo '</div>';

	}




	 ?>


    

<?php get_footer(); ?>