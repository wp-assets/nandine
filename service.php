<?php
/*
Template Name: Service
*/

get_header();
?>        
        
        <!-- Our Services -->
        <section class="services-area section-padding">
            <!-- Services Head -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 text-center">
                        <div class="section-header">
                            <h2><?php echo $nandine['service_header']?> <span><?php echo $nandine['service_header2']?></span></h2>
                        </div>
                    </div>                   
                </div>
            </div>
            <!-- Our Service Here -->
            <div class="container">
                <div class="row">
                    <!-- Single Services -->
                   

					<?php $services = new WP_Query([
						'post_type'  => 'services',
						'posts_per_page' => 6,
					])?>
					<?php if($services->have_posts()):?>
					<?php while($services->have_posts()):$services->the_post();?>
					<div class="col-md-6  col-lg-4 col-sm-12 text-center">					
					<?php $service_icon = get_post_meta($post-> ID, 'service_icon', true);?>

                        <div class="single-services wow bounceInDown">
                            <i class="fa fa-<?php echo $service_icon; ?>"></i>
                            <h3><?php the_title()?></h3>
                            <?php echo wp_trim_words(get_the_content(), '17', false )?>
                        </div>
					</div>
					<?php endwhile;	?>
 					<?php wp_reset_postdata(); ?>

					<?php else : ?>
					<p><?php _e( 'Sorry, no posts matched your query.' ); ?></p>
					<?php endif; ?>	                   
                </div>
            </div>
        </section>
        <!-- Our Services End -->

		<?php get_footer();?>