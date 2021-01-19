<?php get_header(); ?>
<?php if ($_SERVER['REQUEST_URI'] == '/?p=all') : ?>
				</div>
	        </div>
	    </div>
	</section>
	<section class="hero-wrap hero-wrap-2" style="background-image: url('/wp-content/uploads/bg_1.jpg'); margin-top: -14.5em;">
	  <div class="overlay"></div>
	  <div class="container">
	    <div class="row no-gutters slider-text align-items-center justify-content-center">
	      <div class="col-md-9 ftco-animate text-center">
	        <h1 class="mb-2 bread">Information Governance Resources</h1>
			<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
				<?php if(function_exists('bcn_display'))
				{
				    bcn_display();
				}?>
	        </div>
	      </div>
	    </div>
	  </div>
	</section>
<?php elseif ((strpos($_SERVER['REQUEST_URI'], '/?cat=') !== false) || (strpos($_SERVER['REQUEST_URI'], '/category/') !== false)) : ?>
				</div>
	        </div>
	    </div>
	</section>
	<section class="hero-wrap hero-wrap-2" style="background-image: url('/wp-content/uploads/bg_1.jpg'); margin-top: -14.5em;">
	  <div class="overlay"></div>
	  <div class="container">
	    <div class="row no-gutters slider-text align-items-center justify-content-center">
	      <div class="col-md-9 ftco-animate text-center">
	        <h1 class="mb-2 bread"><?php single_cat_title(); ?></h1>
			<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
				<?php if(function_exists('bcn_display'))
				{
				    bcn_display();
				}?>
			</div>
	      </div>
	    </div>
	  </div>
	</section>
	<?php elseif (strpos($_SERVER['REQUEST_URI'], '/resources/') !== false) : ?>
					</div>
		        </div>
		    </div>
		</section>
		<section class="hero-wrap hero-wrap-2" style="background-image: url('/wp-content/uploads/bg_1.jpg'); margin-top: -14.5em;">
		  <div class="overlay"></div>
		  <div class="container">
		    <div class="row no-gutters slider-text align-items-center justify-content-center">
		      <div class="col-md-9 ftco-animate text-center">
		        <h1 class="mb-2 bread"><?php the_title(); ?></h1>
				<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
				    <?php if(function_exists('bcn_display'))
				    {
				        bcn_display();
				    }?>
			    </div>
		      </div>
		    </div>
		  </div>
		</section>
<?php endif; ?>
<?php if ($_SERVER['REQUEST_URI'] == '/?p=all' || (strpos($_SERVER['REQUEST_URI'], '/?cat=') !== false) || (strpos($_SERVER['REQUEST_URI'], '/category/') !== false)) : ?>
    <section class="ftco-section" style="margin-top: -3.5em">
		<div class="container">
			<div class="row">
				<div class="col-md-10 ftco-animate">
					<div class="row">
						<?php while ( have_posts() ) : the_post(); ?>
							<div class="col-md-6 col-lg-4 ftco-animate">
							  <div class="blog-entry">
							    <a href="<?php the_permalink(); ?>" class="block-20 d-flex align-items-end" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
							      <div class="meta-date text-center p-2">
							      	<?php $data = explode(' ', get_the_date()); echo '<span class="day">'.trim($data[1], ',').'</span><span class="mos">'.$data[0].'</span><span class="yr">'.$data[2]; ?>
							      </div>
							    </a>
							    <div class="text  p-6">
							      <h5 style="color: #7cc24d"><i><?php echo get_the_category_list( ', ' ); ?> </i></h5>
							      <h3 class="heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							      <div class="d-flex align-items-center mt-4">
							      </div>
							    </div>
							  </div>
							</div>
						<?php endwhile; ?>
					</div>
				</div>
				<div class="col-md-2 ftco-animate">
					<?php get_sidebar(); ?>
				</div>
			</div>
<?php else : ?>
	<?php if (strpos($_SERVER['REQUEST_URI'], '/resources/') !== false) : ?>
	    <section class="ftco-section" style="margin-top: -3.5em">
			<div class="container">
				<div class="row">
					<div class="col-md-10 ftco-animate">
						<div class="row">
	<? endif; ?>
	<?php while ( have_posts() ) : the_post(); ?>
		  <article class="<?php post_class(); ?>" id="post-<?php the_ID(); ?>" style="padding-left: 10px; padding-right: 10px;">
		    <?php if ( !is_page() ):?>
		      <section class="entry-meta">
		      <p>Posted on <?php the_date();?> by <?php the_author_posts_link();?><?php if (get_the_modified_date() > get_the_date() && strtotime(get_the_date()) > strtotime('2020-12-31')) : ?>. Last updated on <?php the_modified_date();?><?php endif; ?></p>
		      </section>
		    <?php endif; ?>
		    <section class="entry-content">
		      <?php the_content(); ?>
		    </section>
		    <section class="entry-meta"><?php if ( count( get_the_category() ) ) : ?>
		      <span class="category-links">
		        Posted under: <?php echo get_the_category_list( ', ' ); ?>
		      </span>
		      <div class="about-author d-flex p-4 bg-light">
		        <div class="desc">
		        	<h2>About MCBD</h2>
		        	<p>MC Bernstein Data helps companies achieve their objectives related to Information Governance, including data privacy and protection; regulatory, litigation, and consumer responsiveness; information security; acquisitions and divestitures compliance; records management; data licensing management; and operational efficiency.</p>
		        </div>
		      </div>
		      <?php foreach(get_multiple_authors() as $author) { echo "<div class='about-author d-flex p-4 bg-light'><div class='bio mr-5'><img src='/wp-content/uploads/".str_replace(' ', '-', strtolower($author->display_name)).".jpg' alt='".$author->display_name."' class='img-fluid mb-4'></div><div class='desc'><h2>About the Author</h2><h3><a href='".$author->link."'>".$author->display_name."</a></h3><p>".$author->get_meta('description')."</p></div></div>"; } ?>
		    <?php endif; ?></section>
		  </article>
		</div>
	</div>
	<?php endwhile; ?>
	<?php if (strpos($_SERVER['REQUEST_URI'], '/resources/') !== false) : ?>
	  	<div class="col-md-2 ftco-animate">
	  		<?php get_sidebar(); ?>
	  	</div>
	 </div>
	<?php endif; ?>
<?php endif; ?>
<?php get_footer(); ?>