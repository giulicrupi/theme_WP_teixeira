<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- <link rel="profile" href="https://gmpg.org/xfn/11" /> -->
	
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> data-spy="scroll" data-target=".navbar" data-offset="50"> 

<nav class="navbar navbar-expand-lg  fixed-top menu">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo site_url(); ?>">
    	<img src="<?php echo site_url(); ?>/wp-content/uploads/2022/09/logo.png" alt="" class="img-fluid logo">
    	
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fa-solid fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo site_url(); ?>/a-empresa/">Quem Somos</a>
        </li>
        <li class="nav-item" id="desk">
          <a class="nav-link laranja" aria-current="page" href="#">|</a>
        </li>        
        <li class="nav-item">
          <a class="nav-link laranja" href="<?php echo site_url(); ?>/produtos/categoria/todos/">Nossos Imóveis</a>
        </li>
        <li class="nav-item" id="desk">
          <a class="nav-link laranja " href="#">|</a>
        </li>          
        <li class="nav-item" >
          <a class="nav-link disabled" href="#">Portal do Cliente</a>
        </li>
        <li class="nav-item" id="desk">
          <a class="nav-link laranja"  href="#">|</a>
        </li>          
        <li class="nav-item">
          <a class="nav-link laranja" href="<?php echo site_url(); ?>/contato/">Fale Conosco</a>
        </li>                
      </ul>

    </div>
  </div>
</nav>