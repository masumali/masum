<?php
/*this is header*/


?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo esc_url(get_template_directory_uri())?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo esc_url(get_template_directory_uri())?>/css/shop-homepage.css" rel="stylesheet">
	<?php wp_head(); ?>
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
		  <li class="nav-item active">
        <nav class="main-nav">
			<?php 
			wp_nav_menu(array(
				'theme_location' => 'main-menu',
				'container' => '',
				
			));
			?>
			</nav>
			</li>
        </ul>
        </div>
        </div>
      </div>
    </nav>
     <script src="<?php echo esc_url(get_template_directory_uri())?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri())?>/vendor/popper/popper.min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri())?>/vendor/bootstrap/js/bootstrap.min.js"></script>
<?php wp_footer();?>
  </body>

</html>
