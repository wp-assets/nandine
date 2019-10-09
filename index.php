<!doctype html>
<html <?php language_attributes();?> class="no-js">
    <head>
        <meta charset="<?php bloginfo('charset');?>">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php bloginfo('title')?>||<?php bloginfo('description');?></title>
        <meta name="<?php bloginfo('name');?>" content="<?php bloginfo('description'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
        <!--=== Reset Css ===-->
        <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri());?>/assets/css/normalize.css">
        <!--=== Animate ===-->
        <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri());?>/assets/css/plugin/animate.css">
        <!--=== Hover Animation ===-->
        <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri());?>/assets/css/plugin/hover-min.css">
        <!--=== Bootstrap ===-->
        <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri());?>/assets/css/bootstrap.min.css">
        <!--=== Fontawesome icon ===-->
        <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri());?>/assets/css/font-awesome.min.css">
        <!--=== Owl carousel ===-->
        <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri());?>/assets/css/plugin/owl.carousel.min.css">
        <!--=== Magnific PopUp ===-->
        <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri());?>/assets/css/plugin/magnific-popup.css">
        <!--=== Main Css ===-->
        <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri());?>/assets/css/style.css">
        <!--=== Style Css ===-->
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url()');?>" />
        <!--=== Responsive Css ===-->
        <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri());?>/assets/css/responsive.css">
        <script src="<?php echo esc_url(get_template_directory_uri());?>/assets/js/vendor/modernizr-2.8.3.min.js"></script>
		
		<?php wp_head(); ?>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!--===============================================================================-->
        
        <!--====== Header Start ======-->
        <header>
            <div class="header-main">
				<div class="container">
					<div class="row">
                        <div class="col-md-12 col-lg-12">
                            <nav class="navbar navbar-expand-md navbar-light">                          
                                <a class="navbar-brand" href="<?php echo esc_url(bloginfo('home')); ?>"><img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/logo.png" alt=""></a>    
                                
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
								
								<?php
									wp_nav_menu([
										'theme_lacation'=>'mainmenu',
										'menu_class'=>'navbar-nav nav ml-auto py-4 py-md-0',
									]);
								?>

                                </div>
                                
                            </nav>  
                        </div>
					</div>
				</div>                
            </div>         
        </header>
        <!--====== Header End ======-->
		
        <!--====== Header Image ======-->
		<section class="header-image">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="d-table">
						
						<?php $slider = new WP_Query([
							'post_type' => 'slider',
							'posts_per_page' => 1,
						])?>
						
						<?php if(have_posts()): ?>
							<?php while($slider->have_posts()): $slider->the_post();?>
                            <div class="d-table-cell">
                            <h1 class="wow bounceInUp"><?php the_title(); ?></h1>
                            <p class="wow bounceInDown"><?php echo wp_trim_words(get_the_content(), '70', false )?></p>
                            <a class="wow fadeInDown" href="<?php the_permalink();?>">Read More</a>
                            </div>
							<?php endwhile;?>
							<?php else:?>
							<?php echo "Post Not Fonud"?>
							<?php endif;?>
							
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== Header Image End ======-->
        
        <!--====== About Start ======-->
        <section class="nandine-about section-padding">
            <!-- About Head -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 text-center">
                        <div class="section-header">
                            <h2>About <span>Us</span></h2>
                        </div>
                    </div>
                </div> 
            </div>
            <!-- About Content -->
            <div class="container section-padding">
                <div class="row">
                    <div class="col-md-4 col-lg-4 col-sm-12">
                        <div class="about-left wow rollIn">
                            <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/about-us.jpg" alt="About Us">
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
                            <h3>I’m a Freelancer and Webdeveloper</h3>
                            <p><strong>This is Photoshop's version  of Lorem Ipsum.</strong> Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat </p>
                            <p><strong>This is Photoshop's version  of Lorem Ipsum.</strong> Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed </p>
                            <a href="#" class="about-link">Resume / CV <i class="fa fa-download"></i></a>
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

        <!-- Our Services -->
        <section class="services-area section-padding">
            <!-- Services Head -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 text-center">
                        <div class="section-header">
                            <h2>Our <span>Services</span></h2>
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
					
					<?php while($services->have_posts()):$services->the_post();?>
					<div class="col-md-6  col-lg-4 col-sm-12 text-center">					
					<?php $icon = get_post_meta($post-> ID, 'icon', true);?>

                        <div class="single-services wow bounceInDown">
                            <i class="fa fa-<?php echo $icon; ?>"></i>
                            <h3><?php the_title()?></h3>
                            <?php echo wp_trim_words(get_the_content(), '17', false )?>
                        </div>
					</div>
					<?php endwhile;?>
                    
                </div>
            </div>
        </section>
        <!-- Our Services End -->

        <!-- My Skill Area -->
        <section class="my-skill-area section-padding">
            <!-- Skill Head -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 text-center">
                        <div class="section-header">
                            <h2>My<span>Skill</span></h2>
                        </div>
                    </div>    
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <div class="skill-left  wow bounceInLeft">
                            <h3>Why People About Us</h3>
                            <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio </p>
                            <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per </p>
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
                                <h5 class="skilba-title">Web Developmet</h5>
                                <div class="skillbar" data-percent="60">
                                    <p class="skillbar-bar" style="background: #e67e22;"></p>
                                    <span class="skill-bar-percent"></span>
                                </div>                                    
                            </div>
                            <!-- skill item -->
                            <div class="skill-bar">
                                <h5 class="skilba-title">Web Design</h5>
                                <div class="skillbar" data-percent="70">
                                    <p class="skillbar-bar" style="background: #e67e22;"></p>
                                    <span class="skill-bar-percent"></span>
                                </div>                                    
                            </div>
                            <!-- skill item -->
                            <div class="skill-bar">
                                <h5 class="skilba-title">Graphic Design</h5>
                                <div class="skillbar" data-percent="80">
                                    <p class="skillbar-bar" style="background: #e67e22;"></p>
                                    <span class="skill-bar-percent"></span>
                                </div>                                    
                            </div>
                        </div>
                    <!-- End Skill Bar -->
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
				
				
				<?php while($coffee->have_posts()): $coffee->the_post();?>
				
				<?php $icon = get_post_meta($post->ID, 'icon', true );?>
				
                    <!-- single Cunter Box -->
                    <div class="col-md-6 col-lg-3 text-center">
                        <div class="cunter-box  wow bounceInLeft">
                            <p><i class="fa fa-<?php echo $icon; ?>"></i></p>
                            <h4 class="counter" data-count="150"><?php the_title();?></h4>
                            <p><?php the_content();?></p>
                        </div>
                    </div>
					
				<?php endwhile; ?>	
					

                </div>
            </div>
        </section>
        <!-- Cunter Up End -->

        <!-- portfolio -->
        <section class="portfolio-area section-padding">
            <!-- portfolio Head -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 text-center">
                        <div class="section-header">
                            <h2>Our<span>portfolio</span></h2>
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
								$terms = get_terms("porfolio_category");
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
					<?php while($protfolio->have_posts() ) : $protfolio->the_post() ; ?>
                       <div <?php post_class('mix'); ?>>
                           <div class="single-item  wow fadeInDown">
                              <?php if ( has_post_thumbnail()) the_post_thumbnail('portfolio-thumb'); ?>
                               <div class="portfolio-hover">
                               <a class="image-link" href="<?php the_post_thumbnail(get_post_meta($post->ID,'post',true))?>"><i class="fa fa-arrows-alt"></i></a>
                               </div>
                           </div>
                       </div>
					   
					<?php endwhile; ?>	


                    </div>
                </div>
           </div>
        </section>

        <!-- portfolio End -->

        <!-- Team Section -->
        <section class="team-section-area section-padding">
            <!-- portfolio Head -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 text-center">
                        <div class="section-header">
                            <h2>Our<span>Team</span></h2>
                        </div>
                    </div>    
                </div>
            </div>

            <!-- Team Member Item -->
            <div class="container section-padding">
                <div class="row">
                    <div class="col-md-12">
                        <div class="owl-carousel owl-carousel-team owl-theme">
						
						<?php $nandineteam = new WP_Query(array(
							'post_type'=>'team',
							'posts_per_page'=>4,
						))?>
						
						
						
						<?php while($nandineteam->have_posts()):$nandineteam->the_post()?>
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
							
						<?php endwhile;?>	
						
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- Team Section end -->
        
        <!-- Testimonial -->
        <section class="nandine-testimonial-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 text-center offset-md-2">
                        <div class="owl-carousel owl-carousel-testimonial owl-theme">
						
						<?php $testimonial = new WP_Query(array(
							'post_type'=>'testimonial',
							'posts_per_page'=>1,
						))?>
						
						
						
						<?php while($testimonial->have_posts()):$testimonial->the_post()?>
							<!-- testimonial single -->
							<div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
								<?php the_post_thumbnail('testimonial-thumb', array('class' => 'rounded-circle')); ?>
								<h4><?php the_title();?></h4>
								<p><?php echo wp_trim_words(get_the_content(), '47', false );?></p>
							</div>
							
						<?php endwhile;?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial end -->

        <!-- Blog -->
        <section class="nandine_blog section-padding">
            <!-- Blog Head -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="section-header">
                            <h2>Latest<span>Blog</span></h2>
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
                    
                </div>
            </div>
        </section>
        <!-- Blog End -->

        <!-- Contact Us Start -->
        <section class="contact-us-area section-padding wow fadeInUp">
            <!-- Contact Head -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="section-header">
                            <h2>Contact<span>Us</span></h2>
                        </div>
                    </div>    
                </div>
            </div> 
            <!-- Contact Input -->
            <div class="container content-top-space">
                <form action="index.html">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Your Name">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Your Massage">
                                </div>
                                <div class="col-md-12">
                                    <textarea Class="form-control" placeholder="Your Massage Here"></textarea>
                                </div>
                                <div class="col-md-12">
                                    <button type="Submit">Sent Massage<i class="fa fa-rocket"></i></button>
                                </div>                            
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!-- Contact Us End -->

        <!-- Footer Section -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="footer-left">
                            <ul>
                                <li><a href="#"><i class="fa fa-github-alt"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-envelope-open-o"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 text-right">
                        <div class="footer-right">
                            <p>&copy; ThemeFine.net Iman Ali</p>
                        </div>
                    </div>
                </div>
            </div>            
        </footer>
        <!-- Footer Section End -->



        <!--==============================================================-->
        <script src="<?php echo esc_url(get_template_directory_uri());?>/assets/js/jquery-3.2.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo esc_url(get_template_directory_uri());?>/assets/js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <!--=== All Plugin ===-->
        <script src="<?php echo esc_url(get_template_directory_uri());?>/assets/js/bootstrap.min.js"></script>

        <script src="<?php echo esc_url(get_template_directory_uri());?>/assets/js/popper.min.js"></script>

        <script src="<?php echo esc_url(get_template_directory_uri());?>/assets/js/plugin/wow.min.js"></script>
        <script src="<?php echo esc_url(get_template_directory_uri());?>/assets/js/plugin/owl.carousel.min.js"></script>
        <script src="<?php echo esc_url(get_template_directory_uri());?>/assets/js/plugin/jquery.magnific-popup.min.js"></script>
        <script src="<?php echo esc_url(get_template_directory_uri());?>/assets/js/plugin/skill.bars.jquery.js"></script>
        <script src="<?php echo esc_url(get_template_directory_uri());?>/assets/js/plugin/mixitup.min.js"></script>

        <!--=== All Active ===-->
        <script src="<?php echo esc_url(get_template_directory_uri());?>/assets/js/main.js"></script>

        <script>
            document.write("This is Our Javascript Baing Written enything and else")
        </script>




        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
		<?php wp_footer();?>
    </body>
</html>