<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wordsmith
 */
/*
Template name: Home
*/
get_header();
?>

	<section class="slider-section">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 col-md-12">
					<div class="slider" id="slider">
						<?php 
							$args = array(
								'numberposts' => 3,
								'post_type'   => 'post',
								'post_status' => 'publish'
							); 

							$posts = get_posts( $args );

		   					foreach($posts as $post){
		      					setup_postdata($post);
		      				?>
							<div class="slider-item"  style="background-image: url('<?php the_post_thumbnail_url() ?>')">
								<div class="slider-content">
									<span class="slider-category">
										<?php $category = get_the_category(); 
									echo $category[0]->name;?>
									</span>
									<a href="<?php the_permalink(); ?>"><h1><?php the_title() ?></h1></a>
									
									<div class="slider-info">
										<?php echo get_avatar(  get_the_author_meta('user_email') ); ?>
										<ul class="slider-meta">
											<li>
												<span class="slider-name">
													<?php the_author() ?>
												</span>

											</li>
											<li >
												<span class="slider-date"><?php the_time( 'jS F, Y' ); ?>  </span>
											</li>
										</ul>
									</div>
								</div>		
							</div>
						<?
   					}

   					wp_reset_postdata();

					 ?>
							
							</div>
						
					</div>
					
				</div>
			</div>
		</div>
		
	</section>

	<section id="content" class="content index-content">
		<div class="container">
			<div class="row">
				 <?php 

			        // параметры по умолчанию
			        $posts = get_posts( array(
			        'numberposts' => -1,
			        'post_type'   => 'post',
			        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
			        ) );

			        foreach( $posts as $post ){
			        setup_postdata($post);?>

				<div class="col-xl-3 col-md-6">
					<a href="<?php the_permalink() ?>">
						<div class="content-item wow zoomIn" >
							<div class="content-thumb"><?php the_post_thumbnail(); ?></div>
							<div class="content-text">
								<div class="content-cat"><?php $category = get_the_category(); 
									echo $category[0]->name;?></div>
								<div class="content-title"><?php the_title() ?></div>
								<div class="content-date"><?php the_date() ?></div>
							</div>
						</div>
					</a>
				</div>
			<?
	        // формат вывода the_title() ...
	        }

	        wp_reset_postdata(); // сброс

	         ?>	
				<!--</div>
				<div class="col-xl-3 col-md-6">
					<a href="#">
						<div class="content-item wow zoomIn">
							<div class="content-thumb"><picture><source srcset="assets/img/thumbs/post/beetle-400.webp" type="image/webp"><img src="assets/img/thumbs/post/beetle-400.jpg" alt=""></picture></div>
							<div class="content-text">
								<div class="content-cat">Health</div>
								<div class="content-title">10 Interesting Facts About Caffeine.</div>
								<div class="content-date">June 14, 2018</div>
							</div>
						</div>
					</a>
					
				</div>
				<div class="col-xl-3 col-md-6">
					<a href="#">
						<div class="content-item wow zoomIn">
							<div class="content-thumb"><picture><source srcset="assets/img/thumbs/post/flowers-400.webp" type="image/webp"><img src="assets/img/thumbs/post/flowers-400.jpg" alt=""></picture></div>
							<div class="content-text">
								<div class="content-cat">Health</div>
								<div class="content-title">The Power of Music to Reduce Stress.</div>
								<div class="content-date">June 14, 2018</div>
							</div>
						</div>
					</a>
					
				</div>
				<div class="col-xl-3 col-md-6">
					<a href="#">
						<div class="content-item wow zoomIn">
							<div class="content-thumb"><picture><source srcset="assets/img/thumbs/post/fuji-400.webp" type="image/webp"><img src="assets/img/thumbs/post/fuji-400.jpg" alt=""></picture></div>
							<div class="content-text">
								<div class="content-cat">Management</div>
								<div class="content-title">The Pomodoro Technique Really Works.</div>
								<div class="content-date">June 12, 2018</div>
							</div>
						</div>
					</a>
					
				</div>
				<div class="col-xl-3 col-md-6 wow zoomIn">
					<a href="#">
						<div class="content-item">
							<div class="content-thumb"><picture><source srcset="assets/img/thumbs/post/guitarist-400.webp" type="image/webp"><img src="assets/img/thumbs/post/guitarist-400.jpg" alt=""></picture></div>
							<div class="content-text">
								<div class="content-cat">Music</div>
								<div class="content-title">What Your Music Preference Says About You and Your Personality.</div>
								<div class="content-date">June 02, 2018</div>
							</div>
						</div>
					</a>
					
				</div>
				<div class="col-xl-3 col-md-6">
					<a href="#">
						<div class="content-item wow zoomIn">
							<div class="content-thumb"><picture><source srcset="assets/img/thumbs/post/jump-400.webp" type="image/webp"><img src="assets/img/thumbs/post/jump-400.jpg" alt=""></picture></div>
							<div class="content-text">
								<div class="content-cat">Lifestyle</div>
								<div class="content-title">Visiting Theme Parks Improves Your Health.</div>
								<div class="content-date">June 12, 2017</div>
							</div>
						</div>
					</a>
					
				</div>
				<div class="col-xl-3 col-md-6">
					<a href="#">
						<div class="content-item  wow zoomIn">
							<div class="content-thumb"><picture><source srcset="assets/img/thumbs/post/lamp-400.webp" type="image/webp"><img src="assets/img/thumbs/post/lamp-400.jpg" alt=""></picture></div>
							<div class="content-text">
								<div class="content-cat">Relationships</div>
								<div class="content-title">Create Meaningful Family Moments.</div>
								<div class="content-date">June 02, 2018</div>
							</div>
						</div>
					</a>
					
				</div>
				<div class="col-xl-3 col-md-6">
					<a href="#">
						<div class="content-item  wow zoomIn">
							<div class="content-thumb"><picture><source srcset="assets/img/thumbs/post/music-400.webp" type="image/webp"><img src="assets/img/thumbs/post/music-400.jpg" alt=""></picture></div>
							<div class="content-text">
								<div class="content-cat">Lifestyle</div>
								<div class="content-title">Gardening: The Secret to Happiness.</div>
								<div class="content-date">June 01, 2018</div>
							</div>
						</div>
					</a>
					
				</div>
				<div class="col-xl-3 col-md-6">
					<a href="#">
						<div class="content-item  wow zoomIn">
							<div class="content-thumb"><picture><source srcset="assets/img/thumbs/post/shutterbug-400.webp" type="image/webp"><img src="assets/img/thumbs/post/shutterbug-400.jpg" alt=""></picture></div>
							<div class="content-text">
								<div class="content-cat">Creativity</div>
								<div class="content-title">An Examination of Minimalistic Design.</div>
								<div class="content-date">May 30, 2018</div>
							</div>
						</div>
					</a>
					
				</div>
				<div class="col-xl-3 col-md-6">
					<a href="#">
						<div class="content-item  wow zoomIn">
							<div class="content-thumb"><picture><source srcset="assets/img/thumbs/post/sydney-400.webp" type="image/webp"><img src="assets/img/thumbs/post/sydney-400.jpg" alt=""></picture></div>
							<div class="content-text">
								<div class="content-cat">Creativity</div>
								<div class="content-title">What Skills Are Required For a Photographer?</div>
								<div class="content-date">May 30, 2018</div>
							</div>
						</div>
					</a>
					
				</div>
				<div class="col-xl-3 col-md-6">
					<a href="#">
						<div class="content-item  wow zoomIn">
							<div class="content-thumb"><picture><source srcset="assets/img/thumbs/post/tulips-400.webp" type="image/webp"><img src="assets/img/thumbs/post/tulips-400.jpg" alt=""></picture></div>
							<div class="content-text">
								<div class="content-cat">Lifestyle</div>
								<div class="content-title">Throwback To The Good Old Days.</div>
								<div class="content-date">May 28, 2018</div>
							</div>
						</div>
					</a>
					
				</div>
				<div class="col-xl-3 col-md-6">
					<a href="#">
						<div class="content-item  wow zoomIn">
							<div class="content-thumb"><picture><source srcset="assets/img/thumbs/post/watch-400.webp" type="image/webp"><img src="assets/img/thumbs/post/watch-400.jpg" alt=""></picture></div>
							<div class="content-text">
								<div class="content-cat">Travel</div>
								<div class="content-title">Planning Your First Trip To Sydney.</div>
								<div class="content-date">May 28, 2018</div>
							</div>
						</div>
					</a>
					
				</div>-->
				<div class="col-xl-12">
					<nav  aria-label="Page navigation example">
	  					<ul class="pagination d-flex justify-content-center">
		   					<li id="prev-page" class="page-item">
						      <a class="page-link" href="jacascript:void(0)" aria-label="Previous">
						        <span aria-hidden="true">&laquo;</span>
						      </a>
						    </li>
		  				</ul>
					</nav>
				</div>
			</div>
		</div>
	</section>


<?php
get_sidebar();
get_footer();
