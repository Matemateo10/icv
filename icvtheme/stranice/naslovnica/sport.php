<article class="featured">

    <a class="naslov" href="/sport">

        <h1>Sport</h1>

    </a>
    <!-- naslov -->

    <p class="icv-naslov mb-30">INFORMATIVNI CENTAR VIROVITICA</p>
    <!-- .icv-naslov .mb-30 -->

    <div class="slager-parent">

        <div class="slagerx2 pr-30" id="istaknuto-sport">
                
            <?php     
                
            $exclude_category = get_category_by_slug('istaknuto')->term_id;

            $args = array(
                'category_name' => 'istaknuto-sport',
                'posts_per_page' => 2, // broj postova po stranici
                'tax_query' => array(
                    array(
                        'taxonomy' => 'category',
                        'field'    => 'id',
                        'terms'    => array($exclude_category),
                        'operator' => 'NOT IN',
                    ),
                ),
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) {
            $count = 0; // Counter variable

            while ($query->have_posts() && $count < 2) { // Display 2 posts

            $query->the_post();

            // Get the post permalink
            $post_permalink = get_permalink();

            // Trim post title
            $title = get_the_title();     

            // Display your post content here
            ?>

            <div class="slagerx2-main">
                
                <a class="slagerx2-postdiv" href="<?php echo $post_permalink; ?>">
                    
                        <?php if (has_post_thumbnail()) {
                            the_post_thumbnail('post-thumbnail', array('class' => 'slagerx2-post-pic'));
                        }?>
                        <!-- .slagerx2-post-pic -->

                        <div class="natuknica" id="natuknica-sport">

                            <p>SPORT</p>
                
                        </div>
                        <!-- .natuknica -->

                </a>
                <!-- .slagerx2-postdiv -->

                <div class="slagerx2-category" id="category-sport">

                    <?php

                        // Construct the full path to the file
                        $file_path = ABSPATH . 'wp-content/themes/icvtheme/pomocne/kategorije.php';

                        // Check if the file exists before including it
                        if (file_exists($file_path)) {
                            include($file_path);
                        } else {}

                    ?>

                </div>
                <!-- .slagerx2-category -->

                <a class="slagerx2-post-title" href="<?php echo $post_permalink; ?>">

                    <h1><?php echo $title; ?></h1>

                </a>
                <!-- .slagerx2-post-title -->


            </div>
            <!-- slagerx2-main mb-30 -->

            <?php

            $count++; // Increment the counter
            }
            } else {
            // If no posts are found
            echo 'No posts found.';
            }

            wp_reset_postdata();
            ?>
        
        </div>
        <!-- .slagerx2 .pr-30 #istaknuto-sport -->

        <div class="slagerx3 sport-slagerx3 pr-30">
                
            <?php     
                
            $exclude_category = get_category_by_slug('istaknuto')->term_id;

            $args = array(
                'category_name' => 'istaknuto-sport',
                'posts_per_page' => 3, // broj postova po stranici
                'offset' => 2,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'category',
                        'field'    => 'id',
                        'terms'    => array($exclude_category),
                        'operator' => 'NOT IN',
                    ),
                ),
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) {
            $count = 0; // Counter variable

            while ($query->have_posts() && $count < 3) { // Display 3 posts

            $query->the_post();

            // Get the post permalink
            $post_permalink = get_permalink();

            // Trim post title
            $title = get_the_title();     

            // Display your post content here
            ?>

            <div class="slagerx3-main">
                
                <a class="slagerx3-postdiv" href="<?php echo $post_permalink; ?>">
                    
                        <?php if (has_post_thumbnail()) {
                            the_post_thumbnail('post-thumbnail', array('class' => 'slagerx3-post-pic'));
                        }?>
                        <!-- .slagerx3-post-pic -->

                        <div class="natuknica" id="natuknica-sport">

                            <p>SPORT</p>
                
                        </div>
                        <!-- .natuknica -->

                </a>
                <!-- .slagerx3-postdiv -->

                <div class="slagerx3-category" id="category-sport">

                    <?php

                        // Construct the full path to the file
                        $file_path = ABSPATH . 'wp-content/themes/icvtheme/pomocne/kategorije.php';

                        // Check if the file exists before including it
                        if (file_exists($file_path)) {
                            include($file_path);
                        } else {}

                    ?>

                </div>
                <!-- .slagerx3-category -->

                <a class="slagerx3-post-title" href="<?php echo $post_permalink; ?>">

                    <h1><?php echo $title; ?></h1>

                </a>
                <!-- .slagerx3-post-title -->


            </div>
            <!-- slagerx3-main -->

            <?php

            $count++; // Increment the counter
            }
            } else {
            // If no posts are found
            echo 'No posts found.';
            }

            wp_reset_postdata();
            ?>

            <!-- Mjesto za oglas -->
            <div class="slagerx3-main slagerx3-oglas">
        
                <!-- Revive Adserver Asynchronous JS Tag - Generated with Revive Adserver v5.4.1 -->
                <ins data-revive-zoneid="122" data-revive-id="987aaa8bfddb5a07fc66ba2d45209ef6"></ins>
                <script async src="//www.icvads.com/www/delivery/asyncjs.php"></script>
                
            </div>
            <!-- oglas-izmedu -->
        
        </div>
        <!-- .slagerx3 pr-30 -->
    
    </div>
    <!-- .slager-parent mt-30-->

    <aside class="slager-aside">

        <div class="aside-news">

            <?php     
            $args = array(
                'category_name' => 'sportski-vremeplov',
                'posts_per_page' => 1, // Display only 1 post
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();

                    // Get the post permalink
                    $post_permalink = get_permalink();

                    // Trim post title
                    $title = get_the_title();     

                    // Display your post content here
                    ?>
                    <div class="aside-news-main">

                        <a class="aside-news-postdiv" href="<?php echo $post_permalink; ?>">
                            <?php if (has_post_thumbnail()) {
                                the_post_thumbnail('post-thumbnail', array('class' => 'aside-news-post-pic'));
                            }?>
                            <!-- .aside-news-post-pic -->

                            <div class="natuknica" id="natuknica-sport">

                                <p>SPORTSKI VREMEPLOV</p>

                            </div>
                            <!-- .natuknica -->

                        </a>
                        <!-- .aside-news-postdiv -->

                        <div class="aside-news-category" id="category-sport">
                            
                            <?php
                            // Construct the full path to the file
                            $file_path = ABSPATH . 'wp-content/themes/icvtheme/pomocne/kategorije.php';

                            // Check if the file exists before including it
                            if (file_exists($file_path)) {
                                include($file_path);
                            }
                            ?>

                        </div>
                        <!-- .aside-news-category -->

                        <a class="aside-news-post-title" href="<?php echo $post_permalink; ?>">

                            <h1><?php echo $title; ?></h1>

                        </a>
                        <!-- .aside-news-post-title -->

                    </div>
                    <!-- aside-news-main mb-30 -->

                    <?php
                }
            } else {
                // If no posts are found
                echo 'No posts found.';
            }

            wp_reset_postdata();
            ?>
            
        </div>
        <!-- .aside-news -->
   
        <div class="sticky">

            <div class="slager-aside-oglas mt-30">

                <!-- Revive Adserver Asynchronous JS Tag - Generated with Revive Adserver v5.4.1 -->
                <ins data-revive-zoneid="193" data-revive-id="987aaa8bfddb5a07fc66ba2d45209ef6"></ins>
                <script async src="//www.icvads.com/www/delivery/asyncjs.php"></script>

            </div>
            <!-- .slager-aside-oglas mt-30-->

        </div>
        <!-- .sticky -->

    </aside>
    <!-- .slager-aside -->

</article>
<!-- .featured -->
