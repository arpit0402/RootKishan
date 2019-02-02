<html>
    <head>
        <link rel="icon" href="images/iron_logo.png" type="image/gif" sizes="any">
        <title>RooKishan</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="css/main.css">

        <script src='js/jquery-3.3.1.slim.min.js'></script>

    </head>

    <body class="RootK">

<!--========================================================================================
====================================== Header Section ======================================
=========================================================================================-->

        <header class="header header-rootk">        
            <nav class="navbar nav-bar fixed-top navbar-expand-md navbar-dark">
                <a class="navbar-brand" href="Home-RootK.php">
                    <img class="etcodes-normal-logo logo" src="images\logo3_1.png" width="90" alt="Logo">
                </a>

                <?php
                    include 'layouts/header.html';
                ?>

            </nav>

            <h1 class="heading">&#8730;Kishan.</h1>
            <p class="sub-head">Life in a moment.</p>
        </header>

<!--========================================================================================
======================================= Main Content =======================================
=========================================================================================-->

        <div class="container div-main">
           
            <div class="row">

                <div class="col-md-7 col-lg-8">

                    <div class="row blog_posts">
                        <div class="col-md-12 col-lg-12">
                            
                            <article>
                                <div class="post_img">
                                    <img src="images/banner4.jpg" alt="Card image cap">
                                </div>
                                
                                <div class="post_text">
                                    <div class="post_meta_top">- Kishan Panchal
                                    </div>

                                    <h4 class="post_title">
                                        <a href="#">Myself - A Life in a moment.</a>
                                    </h4>
                                    
                                    <div class="post_content">
                                        <p>This Story is about my college time. 
                                            I am studing in IT Engineer at GEC Gandhinagar. 
                                            In College time my life is like Rubik's Cube full of colours, 
                                            but everything messed up.
                                        </p>
                                    </div>

                                    <a href="#" class="link-arrow">Continue Reading...
                                        <i class="fas fa-long-arrow-alt-right ml-1"></i>
                                    </a>
                                </div>
                            </article>
                        </div>
                    </div>

                </div>
                
                <div class="col-md-5 col-lg-4">
                    <div class="bg-color-paper widget">
                        <h5 class="widget-title">Categories</h5>
                        <ul class="category-list list-unstyled">
                            <li> <a href="#">Two-Four line Quotes</a> </li>
                            <li> <a href="#">Poems</a> </li>
                            <li> <a href="#">Stories</a> </li>
                            <li> <a href="#">Programming Quotes</a> </li>
                            <li> <a href="#">Music</a> </li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
        
<!--========================================================================================
====================================== Footer Section ======================================
=========================================================================================-->

        <?php
            include 'layouts/footer.html';
        ?>

        <script src="js/main.js"></script>

    </body>
</html>