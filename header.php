<html lang="he" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    
    <title>WeAct</title>
    <?php wp_head(); ?>
</head>
<body>

<nav>

    <div class="top-nav">
        <div class="right">
            <img class="ham" onclick="openCloseMenu();" src="<?= get_template_directory_uri().'/assets/images/icons/menu.svg' ?>" >
            <div class="page">
                <p>עמוד הבית</p>
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
            <a class="logo" href="#"><img src="<?= get_template_directory_uri().'/assets/images/logo.png' ?>" ></a>
            <!-- <div class="line"></div>
            <div class="lang">
               <p>HE | EN</p>
            </div> -->
        </div>
    </div>

    <div class="menu">
        <div class="x-menu" onclick="openCloseMenu();" >
             <i class="fas fa-times"></i>
        </div>
        <h3>עמוד הבית</h3>
        <ul class="menu-content">
            <li class="cat">
                <div class="arrow-cat">
                    <i class="fas fa-chevron-up"></i>
                </div>
                <h3 class="cat-name">קטגוריה</h3>
                <ul>
                    <li>לינק</li>
                    <li>לינק</li>
                    <li>לינק</li>
                    <li>לינק</li>
                </ul>
            </li>

            <li class="cat">
                <div class="arrow-cat">
                    <i class="fas fa-chevron-up"></i>
                </div>
                <h3 class="cat-name">קטגוריה</h3>
                <ul>
                    <li>לינק</li>
                    <li>לינק</li>
                    <li>לינק</li>
                    <li>לינק</li>
                </ul>
            </li>

            <li class="cat">
                <div class="arrow-cat">
                    <i class="fas fa-chevron-up"></i>
                </div>
                <h3 class="cat-name">קטגוריה</h3>
                <ul>
                    <li>לינק</li>
                    <li>לינק</li>
                    <li>לינק</li>
                    <li>לינק</li>
                </ul>
            </li>

        </ul>
        <div class="social">
            <div class="face">
                <i class="fab fa-facebook-f"></i>
            </div>
            <div class="twee">
                <i class="fab fa-twitter"></i>
            </div>
            <div class="goog">
                <i class="fab fa-google-plus-g"></i>
            </div>
            <div class="yout">
                <i class="fab fa-youtube"></i>
            </div>
            <div class="pint">
                <i class="fab fa-pinterest-p"></i>
            </div>
            <div class="inst">
                <i class="fab fa-instagram"></i>
            </div>
        </div>
        <div class="credit">
           <p>
           &copy; WeAct.live 2018
           </p>
        </div>
    </div>
    <div id="shadow" class="shadow shadow-close"></div>
    
</nav>


    
