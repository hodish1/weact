<div class="post-wrapper">

    <div class="container">

            <div class="content-wrapper">

                    <div class="right-side">
                        <?php the_post(); ?>
                        <h3>
                            <?php the_title(); ?>     
                        </h3>
                        <?php the_content(); ?>
                    </div>

                    <div class="left-side">
                    
                        <img src="<?php echo get_the_post_thumbnail_url() ?>"  alt="">
                    
                    </div>
            
            </div>
    
    </div>

</div>