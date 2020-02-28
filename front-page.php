<?php 
/*
Template Name: Welcome
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
								'posts_per_page' => 12
							));
						?>
					<?php if($protfolio->have_posts()):?>
					<?php while($protfolio->have_posts() ) : $protfolio->the_post() ; ?>
                       <div <?php post_class('mix'); ?>>


                        <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>


                           <div class="single-item  wow fadeInDown">
                              <?php if ( has_post_thumbnail()) the_post_thumbnail('portfolio-thumb'); ?>
                               <div class="portfolio-hover">

                            <?php echo '<a class="image-link" href="'.esc_url($featured_img_url).'" rel="lightbox">'; 
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
		

        <!--====== About Start ======-->
        <section class="nandine-about section-padding">
            <!-- About Head -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 text-center">
                        <div class="section-header">
                            <h2><?php echo $nandine['about_header']?> <span><?php echo $nandine['about_header2']?></span></h2>
                        </div>
                    </div>
                </div> 
            </div>
            <!-- About Content -->
            <div class="container section-padding">
                <div class="row">
                    <div class="col-md-4 col-lg-4 col-sm-12">
                        <div class="about-left wow rollIn">
                            <img src="<?php echo $nandine['about_left']['url']?>" alt="About Us">
                            <div class="left-details">
                                <h4>hanly</h4>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-github-alt"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <div class="about-right wow fadeInDown">
                            <h3><?php echo $nandine['about_right']?></h3>
                            <blockquote><p><?php echo $nandine['about_right2']?></p></blockquote>
                            <a href="<?php the_permalink();?>" class="about-link">Resume / CV <i class="fa fa-download"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== About End ======-->
    
        <!-- Video Play -->
        <section class="video-play section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 text-center">
                        <div class="video">
                            <h2>Want to Know More About Us ?</h2>
                            <a id="video-link" href="https://www.youtube.com/watch?v=s1EpnjzRyDg"><i class="fa fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Video Play End --> 


       <!-- My Skill Area -->
        <section class="my-skill-area section-padding">
            <!-- Skill Head -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 text-center">
                        <div class="section-header">
                            <h2><?php echo $nandine['skill_header']?> <span><?php echo $nandine['skill_header2']?></span></h2>
                        </div>
                    </div>    
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <div class="skill-left  wow bounceInLeft">
                            <h3><?php echo $nandine['skill_left']?></h3>
                            <p><blockquote><?php echo $nandine['skill_left1']?></blockquote></p>
                            <p><blockquote><?php echo $nandine['skill_left2']?></blockquote></p>
                        </div>
                    </div>
                    <!-- Skill Right -->
                    <div class="col-md-6 col-lg-6">
                        <div class="skill-right  wow bounceInRight">
                            <h3>We Are Good in</h3>
                            <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum</p>
                        </div>        
          
                    <div class="nandine-skill-bar wow bounceInRight">
            <!-- skill item -->
            <div class="skill-bar">
              <h5 class="skilba-title"><?php echo $nandine['skill_progress'];?></h5>
              <div class="skillbar" data-percent="<?php echo $nandine['skill_progress1'] ?>">
                <p class="skillbar-bar" style="background: #e67e22;"></p>
                <span class="skill-bar-percent"></span>
              </div>                                    
            </div> 
            <!-- skill item -->
            <div class="skill-bar">
              <h5 class="skilba-title"><?php echo $nandine['skill_progress6'];?></h5>
              <div class="skillbar" data-percent="<?php echo $nandine['skill_progress2'] ?>">
                <p class="skillbar-bar" style="background: #e67e22;"></p>
                <span class="skill-bar-percent"></span>
              </div>                                    
            </div>  
            <!-- skill item -->
            <div class="skill-bar">
              <h5 class="skilba-title"><?php echo $nandine['skill_progresst'];?></h5>
              <div class="skillbar" data-percent="<?php echo $nandine['skill_progress3'] ?>">
                <p class="skillbar-bar" style="background: #e67e22;"></p>
                <span class="skill-bar-percent"></span>
              </div>                                    
            </div>                        
                    </div>
                </div>
            </div>
        </section>
        <!-- My Skill Area End -->

        <!-- Cunter Up -->
        <section class="counter-up-area section-padding">
            <div class="container">
                <div class="row">
        <?php $coffee = new WP_Query([
          'post_type' => 'coffee',
          'posts_per_page' => 4,
        ]);?>
        
        <?php if($coffee->have_posts()):?>
        
        <?php while($coffee->have_posts()): $coffee->the_post();?>
        
        <?php $project_icon = get_post_meta($post->ID, 'project_icon', true );?>
        
                    <!-- single Cunter Box -->
                    <div class="col-md-6 col-lg-3 text-center">
                        <div class="cunter-box  wow bounceInLeft">
                            <p><i class="fa fa-<?php echo $project_icon; ?>"></i></p>
                            <h4 class="counter" data-count="150"><?php the_title();?></h4>
                            <p><?php the_content();?></p>
                        </div>
                    </div>
          
          <?php endwhile;?>
          <?php wp_reset_postdata(); ?>

          <?php else : ?>
          <p><?php _e( 'Sorry, no posts matched your query.' ); ?></p>
          <?php endif; ?>         
          

                </div>
            </div>
        </section>
        <!-- Cunter Up End -->



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
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>

          <?php else : ?>
          <p><?php _e( 'Sorry, no posts matched your query.' ); ?></p>
          <?php endif; ?>                    
                </div>
            </div>
        </section>
        <!-- Our Services End -->












<?php get_footer();?>