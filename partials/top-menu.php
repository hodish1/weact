<div class="top-nav">
        <div class="right">
            <img class="ham" src="<?= get_template_directory_uri().'/assets/images/icons/menu.svg' ?>" >
            <div class="page">
                <p><?php the_title(); ?></p>
            </div>
        </div>
        <div class="middle">
            <div class="line"></div>
            <div class="search">
                <input type="text" style="background-image:url(<?= get_template_directory_uri().'/assets/images/icons/search.png'?>);background-repeat:no-repeat;background-position:6px 6px;background-size:15px;" name="" id="">
                <input type="text" style="background-image:url(<?= get_template_directory_uri().'/assets/images/icons/filter.svg'?>);background-repeat:no-repeat;background-position:left;background-size:contain;" name="" id="">
            </div>
            <div class="line"></div>
            <div class="section">

                <div class="cont">
                    <div class="icon">
                        <img width="35" src="<?= get_template_directory_uri().'/assets/images/icons/menu_article.svg' ?>" alt="">
                    </div>
                    <div class="label">
                        כתבות
                    </div>
                </div>
                <div class="cont">
                    <div class="icon">
                        <img width="35" src="<?= get_template_directory_uri().'/assets/images/icons/menu_video.svg' ?>" alt="">
                    </div>
                    <div class="label">
                        וידאו
                    </div>
                </div>
                <div class="cont">
                    <div class="icon">
                        <img width="35" src="<?= get_template_directory_uri().'/assets/images/icons/menu_audio.svg' ?>" alt="">
                    </div>
                    <div class="label">
                        אודיו
                    </div>
                </div>
                
            </div>
        </div>
        <div class="left">
            <a class="logo" href="<?php echo site_url(); ?>"><img src="<?= get_template_directory_uri().'/assets/images/logo.png' ?>" ></a>
            <!-- <div class="line"></div>
            <div class="lang">
               <p>HE | EN</p>
            </div> -->
        </div>
    </div>