<?php
/*
Template Name: Classes Page Template
*/
 get_header();
?>

<section class="page-image d-flex align-items-center justify-content-center"
    style="background-image: url('<?php the_post_thumbnail_url( );?>');">
    <span class="page-overlay"></span>
    <h1 class="page-title title title-anim">Classes</h1>
    <h1 class="page-title title title-phone">Classes</h1>
</section>

<section style=" position:relative">
    <div class="m-auto text-center">
        <div class="vr rounded-bottom" style="width:5px;height:110px;background-color:black;opacity: .7;"></div>
    </div>
    <div class="container text-center m-auto about">
        <h3 class="section-title">GENERATION Z' CLASSES</h3>
        <div class="vr rounded-bottom rounded-top" style="width:5px;height:25px;background-color:black;opacity: .7;">
        </div>
        <p class="section-paragraph px-4" style="padding-bottom: 20px;">
        Do you like the idea to try an urban sport in a modern way and being a master of your own destiny? <br>
         We know that learning is received best when offered in a fun and exciting ways. That's why we offer our students more than just movement training. <br> <br>
		We teach them about the physiology of the movements they will learn and how a regular movements practice can improve their lives.
        </p>
        <?php echo do_shortcode('[COUNTER_NUMBER id=225]'); ?>
        <div class="vr rounded-bottom rounded-top" style="width:5px;height:25px;background-color:black;opacity: .7;">
        </div>
        <p class="section-paragraph px-4" style="padding-bottom: 20px;">
            
        
        </p>
        <p class="section-paragraph about">
            <span style="color: #606060;font-style: italic;">We always aim for the best and for this reason, our classes are :</span>
            <ul style="list-style-type: none;padding-left:0;letter-spacing: 1px;font-size:16px">
                <li class="v2">- Full of potential without barriers 🏅.</li> <br>
                <li class="v2">- Have dynamic and creative ways to progress 🚀.</li><br>
                <li class="v2">- For all ages and body types 🚶🏻.</li> <br>
                <li class="v2">- Fun and entertaining 🎨.</li>
            </ul>

        </p>
    </div>
</section>
<div class="container">
    <section class="wrapper">
        <div class="row">
        <?php
            $aboutpageMembers = new WP_Query(array(
                'post_type' => 'myclasses',
            ));

            while ($aboutpageMembers->have_posts()) {
                $aboutpageMembers->the_post();

                get_template_part('template-parts/content', 'class');
            
            }
        ?>  

        </div>
    </section>

    <div class="m-auto text-center">
            <div class="vr rounded" style="width:5px;height:110px;background-color:black;opacity: .7;"></div>
        </div>
            
        
    </div>
    <?php echo do_shortcode('[instagram-feed]'); ?>
<?php
get_footer();
?>
</body>

</html>
