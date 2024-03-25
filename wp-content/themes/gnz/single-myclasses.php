<?php
 get_header();
 $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>

<section class="page-image d-flex align-items-center justify-content-center"
    style="background-image: url('/wordpress/wp-content/uploads/2021/11/gnz.jpg');">
    <span class="page-overlay"></span>
    <h1 class="page-title text-center title"><?php the_title();?></h1>

</section>





<section class=" text-center " style="position:relative;">
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
            <?php 
                $tags = get_the_terms($post, 'my_tags');
                if(!empty($tags)) {
                    ?>
                        <?php
                            $count=0;
                            foreach($tags as $cat) {
                                $count ++;
                                print $cat->name;
                                if($count != count($tags))  print " / ";
                            }
                    ?><?php           
                }        
            ?>
            </span>

        </div>
        
        <div class="event-paragraph">
            <table class="mx-auto time-table">
                <tr><th style="width:100px">Saturday</th><td>15:30 - 18:30</td></tr>
                <tr><th style="width:100px">Sunday</th><td>15:30 - 18:30</td></tr>
            </table>
            <div class="vr rounded rounded-top" style="width:5px;height:25px;background-color:black;opacity: .7;"></div>
            <div class="section-content">
                <?php
                    the_content()
                ?>
            </div>
            <h4 class="section-title about">FIND US EASILY</h4>
            <div class="vr rounded rounded-top" style="width:5px;height:25px;background-color:black;opacity: .7;"></div>

        </div>
        
    </div>
    <iframe class="shadow border border-2" 
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3238.371744240577!2d-5.883716484739508!3d35.7416666801802!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0b8729bd5ab1f3%3A0xef5137f104f89da0!2sClub%20Generation%20Z!5e0!3m2!1sfr!2sma!4v1642078244672!5m2!1sfr!2sma" 
    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        <br>
    <a class="custom-btn mt-5" href="#"><span>Contact Us</span></a>

    <div class="m-auto text-center" >
        <div class="vr rounded-bottom" style="width:5px;height:110px;background-color:black;opacity: .7;"></div>
    </div>
    <div class="container text-center m-auto ">
        <h3 class="section-title about">MORE CLASSES</h3>
        <div class="vr rounded rounded-top" style="width:5px;height:25px;background-color:black;opacity: .7;"></div>

        <section class="wrapper">
            <div class="row">
                
            <?php
    $aboutpageMembers = new WP_Query(array(
        'post_type' => 'myclasses',
    ));

    while ($aboutpageMembers->have_posts()) 
    {
        $aboutpageMembers->the_post();
        if( $actual_link != get_permalink())
        {
            get_template_part('template-parts/content', 'class');
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