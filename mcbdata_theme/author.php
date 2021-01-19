<?php get_header(); ?>
	<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/" style="margin-top: -5em; margin-bottom: 1.5em;">
		<?php if(function_exists('bcn_display'))
{
	bcn_display();
}?>
	</div>
	<div class="about-author d-flex p-4 bg-light" style="margin-top: -3.5em">
		<div class="bio mr-5">
			<img src="<?php echo '/wp-content/uploads'.str_replace('/author', '', rtrim($_SERVER['REQUEST_URI'], '/')).'.jpg' ?>" alt="<?php the_author_meta('display_name', get_user_by('slug', $_SERVER['REQUEST_URI'])['id']); ?>" class="img-fluid mb-4">
		</div>
		<div class="desc">
			<h3><?php the_author_meta('display_name', get_user_by('slug', $_SERVER['REQUEST_URI'])['id']); ?></h3>
			<p><?php the_author_meta('description', get_user_by('slug', $_SERVER['REQUEST_URI'])['id']); ?></p>
		</div>
	</div>
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
<?php get_footer(); ?>