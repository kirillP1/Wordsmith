<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package wordsmith
 */

get_header();
?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<section class="single">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">

					<div class="main-item">
						<?php the_post_thumbnail(); ?>
					</div>
					<div class="content">
						<h1><?php the_title() ?></h1>
						<div class="date">
							<span><?php the_time( 'jS F, Y' ); ?>   BY <?php the_author_posts_link(); ?></span>
						</div>
						<?php the_content() ?>
						<div class="col-xl-5 cat-list">
							<h5>Posted In:</h5>
							<span class="post-list">
								<a href="#">Lifestyle, </a>
								<a href="#">
									Managment
								</a>
							</span>
						</div>
						<div class="col-xl-5 cat-list">
							<h5>Tags:</h5>
							<span class="tags-list">
								<a href="#">orci</a>
								<a href="#">lectus</a>
								<a href="#">varius</a>
								<a href="#">turpis</a>
							</span>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row select-post">
				

				<?php 
				the_post_navigation(
					array(
						'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous Post:', 'wordsmith' ) . '</span> <span class="nav-title">%title</span></div>',
						'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next Post:', 'wordsmith' ) . '</span> <span class="nav-title">%title</span></div>',
					)
				);
			 ?>
			
			</div>
		</div>
		<div class="container">
			<div class="row">
				<?php if ( comments_open() || get_comments_number() ) {
					comments_template();
				} ?>
				
	
			</div>
		</div>
	</section>
<?php endwhile;
			endif; ?>
	
			

			

<?php
get_sidebar();
get_footer();
