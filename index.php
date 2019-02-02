<?php
    //include connection.
    include 'connection.php';

    //query function.
    function make_query($conn) {
        $sql = "SELECT * FROM top_quotes";
        $result = $conn->query($sql);
  
        return $result;
    }

    //fetch quotes from database.
        function make_quotes($conn) {
        $output = ''; 
        $result = make_query($conn);
        while ($row = $result -> fetch_assoc()) {
            $output .= '
            <div class="col-md-6 col-lg-6">
                <article>
                    <div class="post_text text-center">
                        <h5 class="post_title">
                            <a href="#">'.$row["quote_id"].'.)</a>
                        </h5>
                        <div class="post_content">
                            <p>" '.$row["post_content"].' "
                            </p>
                        </div>
                        <div class="post_meta_top text-right">
                            <span class="post_meta_category">
                                <a href="#"> - '.$row["post_meta_category"].'</a>
                            </span>
                        </div>                                       
                    </div>
                </article>
            </div>
            ';
        }
        return $output;
    }

?>

<html>
    <head>
        <link rel="icon" href="images/iron_logo.png" type="image/gif" sizes="any">
        <title>WoW-World of World</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="css/main.css">
        
        <script src='js/jquery-3.3.1.slim.min.js'></script>

    </head>

    <body class="WoW">

<!--========================================================================================
====================================== Header Section ======================================
=========================================================================================-->

        <header class="header header-wow">
            <nav class="navbar nav-bar fixed-top navbar-expand-md navbar-dark">    
                <a class="navbar-brand" href="index.php">
                    <img class="etcodes-normal-logo logo" src="images\logo_1.png" width="90" alt="Logo">
                </a>
            
                <?php
                    include 'layouts/header.html';
                ?>

            </nav>

            <h1 class="heading">WoW.</h1>
            <p class="sub-head">World of Words, Explore a new World.</p>
        </header>

<!--========================================================================================
======================================= Main Content =======================================
=========================================================================================-->

        <div class="container div-main">
           
            <div class="row">

                <!--============ Categories ============-->
                <div class="col-lg-4">
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
                
                <!--=========== Quotes ===========-->    
                <div class="col-lg-8">
                    <div class="quotes">    

                        <h4 class="widget-title">Top Quotes</h4>

                        <div class="row card_post">

                            <?php echo make_quotes($conn); ?>
                            
                            <div class="col-12 read-more">
                                <a href="#" class="link-arrow">Read More...
                                    <i class="fas fa-long-arrow-alt-right ml-1"></i>
                                </a>
                            </div>
                        </div>
                    
                    </div>    
                </div>

            </div>

            <!--============ Subscribe ============-->
            <div class="row">

                <div class="col-lg-6">
                    <div class="bg-color-gray-shade-radius">
                        <h3>Follow us on Instagram 
                            <br>For More Post.
                        </h3>
                        <a href="https://www.instagram.com/writer._inside/">
                            <i class="fab fa-instagram" aria-hidden="true"></i>
                            <label for="instagram">@sr._.wow</label>
                        </a>
                        <p>Fill me with the hope that
                            I have Lost in You.<br>
                            Pain always flows in liquid forms,<br>
                            Either from eyes or in ink.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 bg-img">
                    <div class="bg-img-wow">
                        <div class="white-box-square">
                            <div class="text-center subscribe-sqaure">
                                <h1>Kishan / WoW</h1>
                            </div>
                        </div>
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
