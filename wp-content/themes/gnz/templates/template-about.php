<?php
/*
Template Name: About Page Template
*/
 get_header();
?>

<section id="bg-main">
    <div class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
        <h1 class="align-middle m-4 title title-anim rolling-text" style="color:white" data-aos="fade-down"
            data-aos-anchor-placement="top-bottom" data-aos-delay="2000" ><?php the_title() ?></h1>
        <h1 class="align-middle m-4 title title-phone rolling-text" style="color:white" data-aos="fade-down"
        data-aos-anchor-placement="top-bottom" data-aos-delay="2000" ><?php the_title() ?></h1>
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
    <div class="container-fluid text-center m-auto">
        <div class="row">
            <div class="col-md-6 pt-5">
                <h3 class="section-title"><?php the_field('first_section_title');?></h3>
                <div class="vr rounded-bottom rounded-top" style="width:5px;height:25px;background-color:black;opacity: .7;">
                </div>
                <div class="section-paragraph px-md-3">
                <?php the_field('first_section_paragraph');?>
                </div>

            </div>
            <div class="col-md-6 image-left-border" style="background-image: url('http://localhost:8080/wordpress/wp-content/uploads/2021/12/3bcffce9-52ef-472c-a512-59dd0e57b32e.jpg'); height:90vh; background-size: cover;">
            </div>
        </div>
    </div>
</section>

            

<section style="position:relative">
    <div class="m-auto text-center" style="padding-top: 25px;">
        <div class="vr rounded" style="width:5px;height:100px;background-color:black;opacity: .7;"></div>
    </div>
    <div class="container text-center m-auto ">
        <h3 class="section-title about">WHAT WE DO</h3>
        <div class="vr rounded rounded-top" style="width:5px;height:25px;background-color:black;opacity: .7;"></div>
        <p class="section-paragraph about">
            <span style="color: #606060;font-style: italic;">We aim to help the new generation and support them in a dynamic and artistic way .
                For this, we want to generate :</span>
            <ul style="list-style-type: none;padding-left:0;letter-spacing: 1px;font-size:16px">
                <li class="v2">- Support for young people in sports and cultural activities 🏅.</li> <br>
                <li class="v2">- Help for young people coming from disadvantaged neighborhoods ✊.</li><br>
                <li class="v2">- Produce contemporary dance project 🕺.</li> <br>
                <li class="v2">- The development of cultural exchanges 🎯.</li><br>
                <li class="v2">- The promotion of street arts 🎨.</li>
            </ul>

        </p>
        <a class="custom-btn" href="#"><span>Contact Us</span></a>
        <div class="vr rounded-top" style="position: absolute;bottom: 0;left: 0;right: 0;margin: auto;width: 5px;height: 100px;background-color:black;opacity: .7;">
    </div>
    </div>
</section>

<section style=" position:relative">
    <div class="container-fluid text-center m-auto">
        <div class="row">
            <div class="col-md-6 image-right-border-dark" style="background-image: url('http://localhost:8080/wordpress/wp-content/uploads/2021/12/3bcffce9-52ef-472c-a512-59dd0e57b32e.jpg'); height:90vh; background-size: cover;">
            </div>
            <div class="col-md-6 image-left-border-dark pt-5">
                <h3 class="section-title"><?php the_field('second_section_title');?></h3>
                <div class="vr rounded-bottom rounded-top" style="width:5px;height:25px;background-color:black;opacity: .7;">
                </div>
                <div class="section-paragraph px-md-3">
                <?php the_field('second_section_paragraph');?>
                </div>

            </div>

        </div>
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
        $aboutpageMembers->the_post();?>
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
        
    <?php }
?>  

            </div>
        </div>

</section>

<section style=" position:relative">
    <div class="m-auto text-center">
        <div class="vr rounded" style="width:5px;height:110px;background-color:black;opacity: .7;"></div>
    </div>
    <div class="container text-center m-auto about">
        <h3 class="section-title">OUR PARTNERS</h3>
        <div class="vr rounded-bottom rounded-top" style="width:5px;height:25px;background-color:black;opacity: .7;">
        </div>
        <p class="section-paragraph">
            These are the partners that trusted us, and trusted our philosophie . <br>
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
get_footer();
?>
</body>

</html>





