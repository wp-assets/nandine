<?php get_header(); ?>


<?php global $nandine;?>
       





        <!-- Blog -->
        <section class="nandine_blog section-padding">
            <!-- Blog Head -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="section-header">
                            <h2><?php echo $nandine['blog_header']?> <span><?php echo $nandine['blog_header2']?></span></h2>
                        </div>
                    </div>    
                </div>
            </div>
            <!-- blog Content -->
            <div class="container section-padding">
                <div class="row">
                    <!-- Single Blog -->
                  
					
					<?php $nandinepost= new WP_Query(array(
						'post_type' => 'post',
						'posts_per_page' => 3,
					))?>
					<?php if($nandinepost->have_posts()):?>
					<?php while($nandinepost->have_posts()):$nandinepost->the_post()?>
					
					<div class="col-md-6 col-lg-4">
                        <div class="blog_item wow zoomIn" data-wow-duration="1s" data-wow-delay="1s">
                            <div class="blog_img">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="blog_details">
                                <h3><?php the_title();?></h3>
                                <p class="date"><i class="fa fa-calendar"></i><?php the_time('d, F, Y')?></p>
                                <p><?php echo wp_trim_words(get_the_content(), '24', false );?></p>
                                <a href="<?php the_permalink() ?>" class="blog_button">Read More</a>
                           </div>
                        </div>
					</div>	
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>

					<?php else : ?>
					<p><?php _e( 'Sorry, no posts matched your query.' ); ?></p>
					<?php endif; ?>					
						
                    
                </div>
            </div>
        </section>
        <!-- Blog End -->
        



				
			
<?php get_footer();?>