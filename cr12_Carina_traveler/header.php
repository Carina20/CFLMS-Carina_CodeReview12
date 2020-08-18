<html>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<meta name="description" content="<?php bloginfo("description"); ?>">
	<title><?php bloginfo("name"); ?></title>
	<link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>">
   <?php wp_head(); ?>
</head>
<body>

 <nav class="navbar navbar-expand-md navbar-light" role="navigation">
 <div class="container">
   <!-- Brand and toggle get grouped for better mobile display -->
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
   </button>
   <a class="navbar-brand" href="index.php"> Travel Bloggers</a>
   <ul class="navbar-nav mr-auto">
<li>
       <?php
       wp_nav_menu( array(
           'theme_location'    => 'primary',// refers to the key in functions
           'depth'             => 2, // 1 = no dropdowns, 2 = with dropdowns.
           'container'         => 'div', //container around menu
           'container_class'   => 'collapse navbar-collapse',//bs-class
           'container_id'      => 'bs-example-navbar-collapse-1',
           'menu_class'        => 'nav navbar-nav',
           'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
           'walker'            => new WP_Bootstrap_Navwalker(),
       ) );
       ?>
 </li>
<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" style="color:black" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Travelers & Places
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="travelers.php">Travelers</a>
          <a class="dropdown-item" href="places.php">Places</a>
        </div>
</li>
</ul>

   </div>
</nav>