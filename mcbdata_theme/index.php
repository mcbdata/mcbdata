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
	      </div>
	    </div>
	  </div>
	</section>
<?php endif; ?>
<?php if ($_SERVER['REQUEST_URI'] == '/?p=all' || (strpos($_SERVER['REQUEST_URI'], '/?cat=') !== false) || (strpos($_SERVER['REQUEST_URI'], '/category/') !== false)) : ?>
    <section class="ftco-section ">
			<div class="container">
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
<?php else : ?>
	<?php while ( have_posts() ) : the_post(); ?>
	  <article class="<?php post_class(); ?>" id="post-<?php the_ID(); ?>">
	    <h1 class="entry-title"><?php the_title(); ?></h1>
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
	    <?php endif; ?></section>
	  </article>
	<?php endwhile; ?>
<?php endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
