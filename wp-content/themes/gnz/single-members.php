<?php
 get_header();
 $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>

<section class="page-image d-flex align-items-center justify-content-center"
    style="background-image: url('/wordpress/wp-content/uploads/2021/11/gnz.jpg');">
    <span class="page-overlay"></span>
    <h1 class="page-title title"><?php the_title();?></h1>

</section>
    




<section style="position:relative">
    <div class="m-auto text-center" style="padding-top: 25px;">
        <div class="vr rounded" style="width:5px;height:100px;background-color:black;opacity: .7;"></div>
    </div>
    <div class="container text-center m-auto about ">
        <h3 class="section-title about">Who is <?php the_title();?> ?</h3>
        <div class="vr rounded rounded-top" style="width:5px;height:25px;background-color:black;opacity: .7;"></div>
        <div class="member-image-container">
        <?php if( get_field('surname') ): ?>
            <span class="member-category" style="color: #606060;font-style: italic;">Known as: <b><?php the_field('surname'); ?></b></span>
        <?php endif; ?>
           
            <div class="wrap">
                <div class="social">

                <?php if( get_field('facebook_link') ): ?>
                    <a href="<?php the_field('facebook_link');?>" class="member-social-link pt-3">
                        <i class="fab fa-facebook fb" ></i>
                    </a>
                <?php endif; ?>

                <?php if( get_field('youtube_link') ): ?>
                    <a href="<?php the_field('youtube_link');?>" class="member-social-link pt-3">
                        <i class="fab fa-youtube yt"></i>
                    </a>
                <?php endif; ?>

                <?php if( get_field('instagram_link') ): ?>
                    <a href="<?php the_field('instagram_link');?>" class="member-social-link pt-3">
                        <i class="fab fa-instagram ist"></i>
                    </a>
                <?php endif; ?>


                </div>
            </div>
            <img src="<?php the_post_thumbnail_url( );?>" alt="" class="member-image mx-auto d-block rounded shadow mt-0 mb-2">

            <?php 
                $categories = get_the_terms($post, 'my_categories');
                if(!empty($categories)) {
                    ?><span class="member-category" style="color: #606060;font-style: italic;">
                        <?php
                            $count=0;
                            foreach($categories as $cat) {
                                $count ++;
                                print $cat->name;
                                if($count != count($categories))  print " / ";
                            }
                    ?></span><?php           
                }        
            ?>
        </div>
        
        <p class="section-paragraph about">
  
        <?php
            the_content()
        ?>

        </p>
        <a class="custom-btn" href="#"><span>Contact Us</span></a>


        
    </div>
</section>
<section style=" position:relative">
    <div class="m-auto text-center">
        <div class="vr rounded-bottom" style="width:5px;height:110px;background-color:black;opacity: .7;"></div>
    </div>
    <div class="container text-center m-auto about">
        <h3 class="section-title">MEET THE TEAM</h3>
        <div class="vr rounded-bottom rounded-top" style="width:5px;height:25px;background-color:black;opacity: .7;">
        </div>
        <p class="section-paragraph">
            Get to know our team! Who they are and their story... <br>
            Dive in to know more about us and how did every preson here became a part of the familly.
        </p>
        
    </div>

    <div class="wrapper-team">
            <div class="row">
<?php
    $aboutpageMembers = new WP_Query(array(
        'post_type' => 'members',
    ));

    while ($aboutpageMembers->have_posts()) {
        $aboutpageMembers->the_post();
        
        if( $actual_link != get_permalink())
        {
        
        ?>
                <a class="col-lg-4 card-holder-team mb-3" href="<?php the_permalink()?>">
                    <div class="card text-white card-has-bg click-col"
                        style="background-image:url('<?php the_post_thumbnail_url(  )  ?>');">
                        <div class="card-img-overlay d-flex flex-column">
                            <div class="card-body">
                            <h4 class="card-title read-more mt-0 ">read more...</h4>
                            </div>
                            <div class="card-footer">
                                <div class="media">
                                    <div class="media-body">
                                        <br>
                                        <small><?php the_title() ?></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
        
    <?php }  }
?>  

            </div>
        </div>

</section>
        <div class="m-auto text-center">
            <div class="vr rounded" style="width:5px;height:110px;background-color:black;opacity: .7;"></div>
        </div>

    <?php echo do_shortcode('[instagram-feed]'); ?>
<?php
get_footer();
?>
</body>
</html>