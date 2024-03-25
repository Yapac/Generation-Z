<div class="col-lg-4 card-holder mb-3" onclick="javascript:window.location.href='<?php the_permalink()?>' ">
                <div class="card text-white card-has-bg click-col"
                    style="background-image:url('<?php the_post_thumbnail_url(  )?>');">
                    <div class="card-img-overlay d-flex flex-column">
                        <div class="card-body">
                            <small class="card-meta mb-2"><?php the_category(' / '); ?></small>
                            
                            <h4 class="card-title mt-0 "><a class="text-white" herf="#"><?php the_title();?></a></h4>
                            <small><i class="far fa-clock"></i> 
                            <?php 
                                $date = get_field('date_of_event');
                                $date = $date[4].$date[5].'/'.$date[6].$date[7].'/'.$date[2].$date[3];
                                echo date('F j, Y', strtotime($date));
                            ?>
                            </small>
                        </div>
                        <div class="card-footer">
                            <div class="media">
                            <img class="mr-3 rounded-circle" src="<?= get_site_icon_url(512,'');?>"
                                    alt="Generic placeholder image" style="max-width:50px">
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
            <img class='mr-3 rounded-circle' src='".get_sub_field('partner'.$i)."'
             style='max-width:50px'>
            ";
        }
    }
}
    ?>
                    <div class="media-body">
                        <br>
                        <small>
                        <?php
                            if(get_field('date_of_event') > date('Ymd')){
                                echo "COMING SOON";
                            }
                            elseif (get_field('date_of_event') == date('Ymd')) {
                                echo "UP GOING";
                            }
                            else
                            {
                                echo "ENDED";
                            }
                            
                        ?>
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>