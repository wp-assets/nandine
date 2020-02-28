<?php 
/*
Template Name: Our Team
*/


get_header();?>

       <!-- Team Section -->
        <section class="team-section-area section-padding">
            <!-- Team Head -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 text-center">
                        <div class="section-header">
                            <h2><?php global $nandine; echo $nandine['team_header']?> <span><?php echo $nandine['team_header2']?></span></h2>
                        </div>
                    </div>    
                </div>
            </div>

            <!-- Team Member Item -->
            <div class="container section-padding">
                <div class="row">
                    <div class="col-md-12">
                        <div class="owl-carousel owl-carousel-team owl-theme">
						
						<?php $team = new WP_Query([
							'post_type'=>'our-team',
							'posts_per_page'=>4,
						])?>
						
						
						<?php if($team->have_posts()):?>
						<?php while($team->have_posts()):$team->the_post()?>
                            <div class="team-item wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
                                <?php the_post_thumbnail(); ?>
                                <div class="team-hover">
                                    <div class="social-icon">
                                        <h3><?php the_title();?></h3>
                                        <a href="#"><i class="fa fa-<?php echo $teamicon; ?>"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-github-alt"></i></a>
                                    </div>
                                </div>
                            </div>
							
					<?php endwhile;	?>	
					 <?php wp_reset_postdata(); ?>
 
					<?php else : ?>
						<p><?php _e( 'Sorry, no posts matched your query.' ); ?></p>
					<?php endif; ?>
						
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- Team Section end -->

		
<?php get_footer();?>