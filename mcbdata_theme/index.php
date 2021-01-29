<?php get_header(); ?>
<?php if ($_SERVER['REQUEST_URI'] == '/resources/') : ?>
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
	<?php elseif (strpos($_SERVER['REQUEST_URI'], '/resources/') !== false && $_SERVER['REQUEST_URI'] !== '/resources/') : ?>
					</div>
		        </div>
		    </div>
		</section>
		<section class="hero-wrap hero-wrap-2" style="background-image: url('<?php the_post_thumbnail_url(); ?>'); margin-top: -14.5em;">
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
<?php if ($_SERVER['REQUEST_URI'] == '/resources/' || (strpos($_SERVER['REQUEST_URI'], '/?cat=') !== false) || (strpos($_SERVER['REQUEST_URI'], '/category/') !== false)) : ?>
    <section class="ftco-section" style="margin-top: -3.5em">
		<div class="container">
			<div class="row">
				<div class="col-md-10 ftco-animate">
					<div class="row">
						<?php while ( have_posts() ) : the_post(); ?>
							<div class="col-md-6 col-lg-4 ftco-animate">
							  <div class="blog-entry" style="height: 470px;">
							    <a href="<?php the_permalink(); ?>" class="block-20 d-flex align-items-end" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
							      <div class="meta-date text-center p-2">
							      	<?php $data = explode(' ', get_the_date()); echo '<span class="day">'.trim($data[1], ',').'</span><span class="mos">'.$data[0].'</span><span class="yr">'.$data[2]; ?>
							      </div>
							    </a>
							    <div class="text p-6">
							      <h5 style="color: #7cc24d"><i><?php echo get_the_category_list( ', ' ); ?> </i></h5>
							      <h3 class="heading" style='margin-bottom: 0px;'><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								  <p>
									  <?php if (get_the_modified_date() > get_the_date() && strtotime(get_the_modified_date()) > strtotime('2021-01-28')) : ?>Last updated on <?php the_modified_date();?><?php endif; ?>
									</p>
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
	<?php if (strpos($_SERVER['REQUEST_URI'], '/resources/') !== false && $_SERVER['REQUEST_URI'] !== '/resources/') : ?>
	    <section class="ftco-section" style="margin-top: -3.5em">
			<div class="container">
				<div class="row">
					<div class="col-md-10 ftco-animate">
						<div class="row">
	<? endif; ?>
	<?php while ( have_posts() ) : the_post(); ?>
		  <article class="<?php post_class(); ?>" id="post-<?php the_ID(); ?>" style="padding-left: 10px; padding-right: 10px;">
		    <?php if ( !is_page() ):?>
				<div class="row mb-2">
					<div class="col-md-6 ftco-animate">
						  <section class="entry-meta">
							  <?php the_author_posts_link();?><span style='font-size:12px;'> • </span><?php the_date();?><?php if (get_the_modified_date() > get_the_date() && strtotime(get_the_modified_date()) > strtotime('2021-01-28')) : ?><br>Last Updated on <?php the_modified_date();?><?php endif; ?>
						  </section>
					</div>
					<div class="col-md-6 ftco-animate">
						  <section class="entry-meta text-right"><?php if ( count( get_the_category() ) ) : ?>
							  <span class="category-links">
								  <p style='text-transform: uppercase;'><?php echo get_the_category_list( ', ' ); ?></p>
							  </span>
			  <?php endif; ?></section>
					</div>
			  </div>
		    <?php endif; ?>
		    <section class="entry-content">
		      <?php the_content(); ?>
		    </section>
			<?php if ( !is_page() ):?>
		      <div class="about-author d-flex p-4 bg-light">
				  	<div class="row">
					   <div class="col-md-6 ftco-animate">
						   <h2>About the Author<?php echo (count(get_multiple_authors()) > 1) ? 's' : ''; ?></h2>
		                   <?php foreach(get_multiple_authors() as $author) { echo "<div class='about-author d-flex bg-light'><div class='bio mr-5'><img style='border-radius: 50%;' src='/wp-content/uploads/".str_replace(' ', '-', strtolower($author->display_name)).".jpg' alt='".$author->display_name."' class='img-fluid mb-4'></div><div class='desc'><h3><a href='".$author->link."'>".$author->display_name."</a></h3><p>".$author->get_meta('description')."</p></div></div>"; } ?>
						</div>
						<div class="col-md-6 ftco-animate">
		                    <div class="desc">
		        	            <h2>About MCBD</h2>
		        	            <p>MC Bernstein Data helps companies achieve their objectives related to Information Governance, including data privacy and protection; regulatory, litigation, and consumer responsiveness; information security; acquisitions and divestitures compliance; records management; data licensing management; and operational efficiency.</p>
								<a style='padding: 0;' href="/why-us" class="nav-link">Learn More</a>
		                    </div>
		               </div>

				  </div>
			  </div>
			<?php endif; ?>
		  </article>
		</div>
	</div>
	<?php endwhile; ?>
	<?php if (strpos($_SERVER['REQUEST_URI'], '/resources/') !== false && $_SERVER['REQUEST_URI'] !== '/resources/') : ?>
	  	<div class="col-md-2 ftco-animate">
	  		<?php get_sidebar(); ?>
	  	</div>
	 </div>
	<?php endif; ?>
<?php endif; ?>
<?php get_footer(); ?>