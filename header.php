<!doctype html>
<html <?php language_attributes();?> class="no-js">
    <head>
        <meta charset="<?php bloginfo('charset');?>">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
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
    <body <?php body_class()?>>
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
                                <a class="navbar-brand" href="<?php echo esc_url(bloginfo('home')); ?>"><img src="<?php global $nandine; echo $nandine['l_uploader']['url']?>" alt="Logo"></a>    
                                
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
								
								<?php
									wp_nav_menu([
										'theme_lacation'=>'mainmenu',
                                        'menu_class'=>'navbar-nav nav',
                                        'link_before'=>'',
                                        'link_after'=>'',
                                        'before'=>'',
										'after'=>'',
                                        'Walker'=> new Nandine_Walker(),
                                        'fallback_cb'=>'default_menu',
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
						
						<?php if($slider->have_posts()): ?>
							<?php while($slider->have_posts()): $slider->the_post();?>
                            <div class="d-table-cell">
                            <h1 class="wow bounceInUp"><?php the_title(); ?></h1>
                            <p class="wow bounceInDown"><?php echo wp_trim_words(get_the_content(), '70', false )?></p>
                            <a class="wow fadeInDown" href="<?php the_permalink();?>">Buy This Theme</a>
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
        <!--====== Header Image End ======-->		
		