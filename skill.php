<?php 

/*
Template Name: Skill
*/

get_header();?>
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
<?php get_footer();?>