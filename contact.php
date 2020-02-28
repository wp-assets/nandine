<?php
/*
Template Name: Contact Us

*/
get_header(); ?>
        


        <!-- Contact Us Start-->
        <section class="contact-us-area section-padding wow fadeInUp">
            <!-- Contact Head -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="section-header">
                            <h2><?php global $nandine; echo $nandine['contact_header'] ?> <span><?php echo $nandine['contact_header2']?></span></h2>
                        </div>
                    </div>    
                </div>
            </div> 
			
			
			
			<?php while(have_posts()):the_post();?>
				<?php the_content();?>
			<?php endwhile;?>
             <!--Contact Input 
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
            </div> -->
        </section>
        <!-- Contact Us End -->		



	<?php get_footer();?>