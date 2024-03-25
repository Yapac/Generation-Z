<?php

 get_header();
?>

<section class="page-image d-flex align-items-center justify-content-center"
    style="background-image: url('<?php echo get_the_post_thumbnail_url('89','full'); ?>;?>');">
    <span class="page-overlay"></span>
    <h1 class="page-title title title-anim">Events</h1>
    <h1 class="page-title title title-phone">Events</h1>
</section>

<section style=" position:relative">
    <div class="m-auto text-center">
        <div class="vr rounded-bottom" style="width:5px;height:110px;background-color:black;opacity: .7;"></div>
    </div>
    <div class="container text-center m-auto about">
        <h3 class="section-title">WE ARE GENERATION Z</h3>
        <div class="vr rounded-bottom rounded-top" style="width:5px;height:25px;background-color:black;opacity: .7;">
        </div>
        <p class="section-paragraph px-4" style="padding-bottom: 20px;">
            From time to time Generation Z executes great events for the community ! <br>
            Take a look at the events that we create, and you can look forward to our events
            in the future so you will not miss any of them!
        </p>
    </div>
</section>
<div class="container">
    <section class="wrapper">
        <div class="row">

            <?php
            if( have_posts() ){
                while ( have_posts() ) {
                    
                    the_post( );
                    get_template_part('template-parts/content', 'article');
                }
            }
            ?>
        </div>
    </section>



</div>
<?php
get_footer();
?>
</body>

</html>