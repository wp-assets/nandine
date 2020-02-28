<?php 
/*
Template Name: Portfolio
*/
get_header();?>

        <!-- portfolio -->
        <section class="portfolio-area section-padding">
            <!-- portfolio Head -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 text-center">
                        <div class="section-header">
                            <h2><?php echo $nandine['portfolio_header']?> <span><?php echo $nandine['portfolio_header2']?></span></h2>
                        </div>
                    </div>    
                </div>
            </div>
           <!-- Section Content -->
           <div class="container">
                <!-- portfolio Menu -->
                <div class="row content-top-space">
                    <div class="col-md-12 col-lg-12 col-sm-12 text-center">
                        
						
							<!-- Filters -->
							<?php if(!is_tax()) {
								$terms = get_terms('porfolio_category');
								$count = count($terms);
								if ( $count > 0 ){ ?>
								<div class="portfolio-menu">
									<li class="filter" data-filter="all"><?php  _e('All', 'Portfolio'); ?></li>
									<?php
										foreach ( $terms as $term ) {
										echo '<li class="filter" data-filter="'.$term->slug.'">'.$term->name.'</li>';
										} 
									?>	
									
								</div>
							<?php } } ?>						

                    </div>                        
                    
                </div>
               <!-- portfolio Content -->
                <div class="portfolio-content">
                    <div class="row">
						<!-- For Crop feature Image and calling-->
						<?php 
							$protfolio = new WP_Query(array(
								'post_type' => 'portfolio',
								'posts_per_page' => 6
							));
						?>
					<?php if($protfolio->have_posts()):?>
					<?php while($protfolio->have_posts() ) : $protfolio->the_post() ; ?>
                       <div <?php post_class('mix'); ?>>
 

                        <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
                       
                       
                           <div class="single-item  wow fadeInDown">
                              <?php if ( has_post_thumbnail()) the_post_thumbnail('portfolio-thumb'); ?>
                               <div class="portfolio-hover">

                            <?php echo '<a class="image-link" href="'.$featured_img_url.'" rel="lightbox">'; 
                            echo '<i class="fa fa-arrows-alt"></i></a>';?>
                               
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
           </div>
        </section>

        <!-- portfolio End -->
		<p>
    <?php 

      echo get_post_meta(get_the_id(), 'g_link', true);

    ?></p>

        <!-- Testimonial -->
        <section class="nandine-testimonial-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 text-center offset-md-2">
                        <div class="owl-carousel owl-carousel-testimonial owl-theme">
            
            <?php $testimonial = new WP_Query(array(
              'post_type'=>'testimonial',
              'posts_per_page'=>3,
            ))?>
            
            
            <?php if($testimonial->have_posts()):?>
            <?php while($testimonial->have_posts()):$testimonial->the_post()?>
              <!-- testimonial single -->
              <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
                <?php the_post_thumbnail('testimonial-thumb', array('class' => 'rounded-circle')); ?>
                <h4><?php the_title();?></h4>
                <p><?php echo wp_trim_words(get_the_content(), '47', false );?></p>
              </div>
              
            <?php endwhile;?>
           <?php wp_reset_postdata(); ?>
 
          <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your query.' ); ?></p>
          <?php endif; ?>           
            
            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial end -->
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
              
          <?php endwhile; ?>  
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