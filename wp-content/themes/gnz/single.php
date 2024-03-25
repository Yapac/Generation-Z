<?php
 get_header();
 $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>

<section class="page-image d-flex align-items-center justify-content-center"
    style="background-image: url('/wordpress/wp-content/uploads/2021/11/gnz.jpg');">
    <span class="page-overlay"></span>
    <h1 class="page-title text-center title"><?php the_title();?></h1>

</section>





<section style="position:relative">
    <div class="m-auto text-center" style="padding-top: 25px;">
        <div class="vr rounded" style="width:5px;height:100px;background-color:black;opacity: .7;"></div>
    </div>
    <div class="container text-center m-auto about ">
        <h3 class="section-title about"><?php the_title();?> ?</h3>
        <div class="vr rounded rounded-top" style="width:5px;height:25px;background-color:black;opacity: .7;"></div>
        <div class="member-image-container">
        <?php

if( have_rows('partners') )
{

    while( have_rows('partners') )
    { 
        the_row();
        for ($i=1; $i<=5; $i++) 
        {
            if(!empty(get_sub_field('partner'.$i)))
            echo "
            <img class='mr-3 rounded-circle dark-shadow mx-2' src='".get_sub_field('partner'.$i)."'
             style='max-width:50px'>
            ";
        }
    }
}
    ?>
           
    
            <img src="<?php the_post_thumbnail_url( );?>" alt="" class="event-image mx-auto d-block rounded shadow mt-5 mb-2">

            <span class="member-category" style="color: #606060;font-style: italic;">
                      <?php the_category(' / '); ?>
            </span>

        </div>
        
        <div class="event-paragraph">
  
        <?php
            the_content()
        ?>



        </div>
        <a class="custom-btn" href="#"><span>Contact Us</span></a>




        
    </div>

    <div class="m-auto text-center" >
        <div class="vr rounded-bottom" style="width:5px;height:110px;background-color:black;opacity: .7;"></div>
    </div>
    <div class="container text-center m-auto ">
        <h3 class="section-title about">MORE EVENTS</h3>
        <div class="vr rounded rounded-top" style="width:5px;height:25px;background-color:black;opacity: .7;"></div>

        <section class="wrapper">
            <div class="row">
                
                <?php
                    $aboutpageMembers = new WP_Query(array(
                        'post_type' => 'post',
                    ));

                    while ($aboutpageMembers->have_posts()) {
                        $aboutpageMembers->the_post();
                        if( $actual_link != get_permalink())
                        {
                        get_template_part('template-parts/content', 'article');
                        }
                    }
                ?>  
            </div>
        </section>
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