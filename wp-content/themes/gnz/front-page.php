<?php
 get_header();
?>
<section id="bg-main">
    <div class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
        <h1 class="align-middle m-4 title title-anim" style="color:white" data-aos="fade-down"
            data-aos-anchor-placement="top-bottom" data-aos-delay="2000"><?php the_title() ?></h1>
            <h1 class="align-middle m-4 title title-phone" style="color:white" data-aos="fade-down"
            data-aos-anchor-placement="top-bottom" data-aos-delay="2000"><?php the_title() ?></h1>
        <div class='scrolldown'>
            <div class="chevrons">
                <div class='chevrondown'></div>
                <div class='chevrondown'></div>
            </div>
        </div>
    </div>
    <div class="vr rounded-top"
        style="position: absolute;bottom: 0;left: 0;right: 0;margin: auto;width: 5px;height: 35px;background-color:white;opacity: .7;">
    </div>
</section>

<section style=" position:relative">
    <div class="m-auto text-center">
        <div class="vr rounded-bottom" style="width:5px;height:110px;background-color:black;opacity: .7;"></div>
    </div>
    <div class="container text-center m-auto about">
        <h3 class="section-title"><?php the_field('about_title');?></h3>
        <div class="vr rounded-bottom rounded-top" style="width:5px;height:25px;background-color:black;opacity: .7;">
        </div>
        <p class="section-paragraph">
            <?php the_field('about_paragraph');?>
        </p>
        <a class="custom-btn" href="about"><span>Read More</span></a>
        <div class="vr rounded"
            style="position: absolute;bottom: 0;left: 0;right: 0;margin: auto;width: 5px;height: 110px;background-color:black;opacity: .7;">
        </div>
    </div>
</section>

<section class="parallax-image text-center"
    style="background-image: url('/wordpress/wp-content/uploads/2021/11/gnz.jpg');margin-top:25px">

    <h1 class="gnz-title"><?php the_field('classes_title');?></h1>
    <div class="content">

        <div class="card">

            <div class="icon"><i class="material-icons md-36">snowshoeing</i></div>
            <p class="card-title"><?php the_field('first_card_title');?></p>
            <p class="text"><?php the_field('first_card_paragraph');?></p>

        </div>
        <div class="card">

            <div class="icon"><i class="material-icons md-36">accessibility_new</i></div>
            <p class="card-title"><?php the_field('second_card_title');?></p>
            <p class="text"><?php the_field('second_card_paragraph');?></p>

        </div>
        <div class="card">

            <div class="icon"><i class="material-icons md-36">more_horiz</i></div>
            <p class="card-title"><?php the_field('third_card_title');?></p>
            <p class="text"><?php the_field('third_card_paragraph');?></p>

        </div>

    </div>
    <a class="custom-btn m-5" href="#"><span>See All Classes</span></a>
</section>

<section style="position:relative">
    <div class="m-auto text-center" style="padding-top: 25px;">
        <div class="vr rounded-bottom" style="width:5px;height:100px;background-color:black;opacity: .7;"></div>
    </div>
    <div class="container text-center m-auto ">
        <h3 class="section-title about"><?php the_field('events_title');?></h3>
        <div class="vr rounded rounded-top" style="width:5px;height:25px;background-color:black;opacity: .7;"></div>
        <p class="section-paragraph about">
            <?php the_field('events_paragraph');?>
        </p>
        <section class="wrapper">
            <div class="row">
                
                <?php
                    $aboutpageMembers = new WP_Query(array(
                        'post_type' => 'post',
                    ));

                    while ($aboutpageMembers->have_posts()) {
                        $aboutpageMembers->the_post();
                        get_template_part('template-parts/content', 'article');
                        
                    }
                ?>  
            </div>
        </section>
        <a class="custom-btn" href="events"><span>See All Events</span></a>
    </div>
</section>

<section style=" position:relative">
    <div class="m-auto text-center">
        <div class="vr rounded-bottom" style="width:5px;height:110px;background-color:black;opacity: .7;"></div>
    </div>
    <div class="container text-center m-auto about">
        <h3 class="section-title">OUR PARTNERS</h3>
        <div class="vr rounded-bottom rounded-top" style="width:5px;height:25px;background-color:black;opacity: .7;">
        </div>
        <p class="section-paragraph">
            These are the partners that trusted us, and trusted our philosophie.
            We got great times working with them and maybe we gonna have more projects together and maybe our next project will be with you!
        </p>
        <?php echo do_shortcode('[logo-slider]'); ?>
        <div class="m-auto text-center">
            <div class="vr rounded" style="width:5px;height:110px;background-color:black;opacity: .7;"></div>
        </div>
            
        
    </div>
    <?php echo do_shortcode('[instagram-feed]'); ?>

</section>

<?php
get_footer()
?>
</body>

</html>