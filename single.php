<?php get_header(); ?>

	
        <!--====== About Start ======-->
        <section class="nandine-about section-padding">
            <!-- About Head -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 text-center">
                        <div class="section-header">

							<?php while(have_posts()):the_post();?>
							
							<h1><?php the_title();?></h1>
							<?php the_post_thumbnail();?>
							<?php the_content();?>
							<?php endwhile;?>


                        </div>
                    </div>
                </div> 
            </div>

        </section>
        <!--====== About End ======-->

<?php get_footer();?>