<?php
get_header();

?>
  <div class="container">

      <div class="row">

        <div class="col-lg-3">

          <h1 class="my-4">Shop Name</h1>
          <div class="list-group">
            <a href="#" class="list-group-item">Category 1</a>
            <a href="#" class="list-group-item">Category 2</a>
            <a href="#" class="list-group-item">Category 3</a>
          </div>

        </div>

        <div class="col-lg-9">

          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
     		 </div>
          </div>
          </div>
          </div>

          		<div class="container">
          		<div class="row">
          		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
               <div class="col-lg-4 col-md-6 mb-4">
               		 <?php the_content()?>
              <div class="card h-100">
              <li>
               
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="the_permalink();">Item Five</a>
                  </h4>
                  <h5>$24.99</h5>
                  <p class="excerpt"></p>
                 	<?php endwhile; else: ?>

				<p>Sorry, there are no posts to display</p>

				<?php endif; ?>

                </div>
                </div>
                </div>

               </div>

