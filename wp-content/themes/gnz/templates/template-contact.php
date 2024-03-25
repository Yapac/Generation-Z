<?php
/*
Template Name: Contact Page Template
*/
 get_header();
?>

<section class="page-image d-flex align-items-center justify-content-center"
    style="background-image: url('<?php the_post_thumbnail_url( );?>');">
    <span class="page-overlay"></span>
    <h1 class="page-title title title-anim"><?php the_title();?></h1>
    <h1 class="page-title title title-phone"><?php the_title();?></h1>
</section>

<section class="contact-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="wrapper-contact">
                    <div class="row no-gutters">

                    <div class="col-md-6 d-flex align-items-stretch p-0">
                    <?php
                        the_content()
                    ?>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch p-0">
                        <div class="info-wrap w-100 p-md-5 p-4 py-5 img">
                        <h3>Contact information</h3>
                        <p class="mb-5" style="color: #606267;">
                           We're open for any suggestion or just to have a chat, <br>
                           Feel free to text us using the way you like <br>

                        </p>
                        <div class="dbox w-100 d-flex align-items-center">
                        <div
                            class="
                            me-3
                            icon
                            d-flex
                            align-items-center
                            justify-content-center
                            "
                        >
                            <i class="fa fa-phone" style="font-size: 18px;"></i>
                        </div>
                        <div class="text pl-3">
                            <p>
                            <span class="p-1">Phone:</span>
                            <a href="tel://0642630469">+ 1235 2355 98</a>
                            </p>
                        </div>
                        </div>
                        <div class="dbox w-100 d-flex align-items-center">
                        <div
                            class="
                            me-3
                            icon
                            d-flex
                            align-items-center
                            justify-content-center
                            "
                        >
                            <i class="fa fa-paper-plane"  style="font-size: 18px;"></i>
                        </div>
                        <div class="text pl-3">
                            <p>
                            <span class="p-1">Email:</span>
                            <a href="mailto:info@yoursite.com"
                                >info@yoursite.com</a
                            >
                            </p>
                        </div>
                        </div>

                        <div class="dbox w-100 d-flex align-items-center">
                        <div
                            class="
                            me-3
                            icon
                            d-flex
                            align-items-center
                            justify-content-center
                            "
                        >
                        <i class="fab fa-whatsapp" style="font-size: 20px;"></i>
                        </div>
                        <div class="text pl-3">
                            <p>
                            <span class="p-1">Whatsapp:</span>
                            <a href="whatsapp://0642630469">+ 1235 2355 98</a>
                            </p>
                        </div>
                        </div>

                        <div class="dbox w-100 d-flex align-items-center">
                        <div
                            class="
                            me-3
                            icon
                            d-flex
                            align-items-center
                            justify-content-center
                            "
                        >
                            <span class="fab fa-instagram"  style="font-size: 20px;"></span>
                        </div>
                        <div class="text pl-3">
                            <p>
                            <span class="p-1">Instagram:</span> <a href="#">generation_z</a>
                            </p>
                        </div>
                        </div>
                        </div>
                    </div>
            </div>
            </div>
        </div>
        </div>
    </div>
</section>
<div class="m-auto text-center pb-1">
    <div class="vr rounded" style="width:5px;height:110px;background-color:black;opacity: .7;"></div>
</div>
<?php 
echo do_shortcode('[instagram-feed]'); 

get_footer();
?>
</body>

</html>