<article class="featured">

    <a class="naslov" href="/vijesti">

        <h1>Vijesti</h1>

    </a>
    <!-- naslov -->

    <p class="icv-naslov mb-30">INFORMATIVNI CENTAR VIROVITICA</p>

    <div class="slager-parent">

        <div class="slagerx2 pr-30" id="istaknuto-vijesti">
                
            <?php     
                
            $exclude_category = get_category_by_slug('istaknuto')->term_id;

            $args = array(
                'category_name' => 'istaknuto-vijesti',
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

                        <?php

                            $natuknicaClass = '';

                            if (has_category('promo')){

                                $natuknicaClass = 'natuknica-promo';

                            } elseif (has_category('istaknuto-vijesti')){

                                $natuknicaClass = 'natuknica';

                            }
                            ?>

                        <div class="<?php echo $natuknicaClass ?>">

                            <?php 
                                $natuknica = '';

                                if (has_category('promo')) {
                                    $natuknica = 'PROMO';
                                } elseif (has_category('istaknuto-vijesti')) {
                                    $natuknica = 'VIJESTI';
                                }
                            ?>

                            <p><?php echo $natuknica; ?></p>

                        </div>
                        <!-- .natuknica -->

                </a>
                <!-- .slagerx2-postdiv -->

                <?php

                    $categoryPromo = '';

                    if (has_category('promo')){

                        $categoryPromo = 'category-promo';

                    } else {

                        $categoryPromo = '';

                    }

                ?>

                <div class="slagerx2-category" id="<?php echo $categoryPromo ?>">

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
        <!-- .slagerx2 -->

        <div class="slagerx3 pr-30">
                
            <?php     
                
            $exclude_category = get_category_by_slug('istaknuto')->term_id;

            $args = array(
                'category_name' => 'istaknuto-vijesti',
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

                        <?php

                            $natuknicaClass = '';

                            if (has_category('promo')){

                                $natuknicaClass = 'natuknica-promo';

                            } elseif (has_category('istaknuto-vijesti')){

                                $natuknicaClass = 'natuknica';

                            }
                            ?>

                        <div class="<?php echo $natuknicaClass ?>">

                            <?php 
                                $natuknica = '';

                                if (has_category('promo')) {
                                    $natuknica = 'PROMO';
                                } elseif (has_category('istaknuto-vijesti')) {
                                    $natuknica = 'VIJESTI';
                                }
                            ?>

                            <p><?php echo $natuknica; ?></p>

                        </div>
                        <!-- .natuknica -->

                </a>
                <!-- .slagerx3-postdiv -->

                <?php

                    $categoryPromo = '';

                    if (has_category('promo')){

                        $categoryPromo = 'category-promo';

                    } else {

                        $categoryPromo = '';

                    }

                ?>

                <div class="slagerx3-category" id="<?php echo $categoryPromo ?>">

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
        <!-- slagerx3-main mb-30 -->

            <?php

            $count++; // Increment the counter
            }
            } else {
            // If no posts are found
            echo 'No posts found.';
            }

            wp_reset_postdata();
            ?>

            <div class="aside-news aside-news-mob">

                <?php     
                $args = array(
                    'category_name' => 'fotka-dana',
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

                        <div class="natuknica">

                            <p>FOTKA DANA</p>

                        </div>
                        <!-- .natuknica -->

                    </a>
                    <!-- .aside-news-postdiv -->

                    <div class="aside-news-category">
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

            <!-- Mjesto za oglas -->
            <div class="slagerx3-main slagerx3-oglas">
        
                <!-- Revive Adserver Asynchronous JS Tag - Generated with Revive Adserver v5.4.1 -->
                <ins data-revive-zoneid="113" data-revive-id="987aaa8bfddb5a07fc66ba2d45209ef6"></ins>
                <script async src="//www.icvads.com/www/delivery/asyncjs.php"></script>
                
            </div>
            <!-- slagerx3-oglas -->
        
        </div>
        <!-- .slagerx3 -->
    
    </div>
    <!-- .slager-parent mt-30-->

    <aside class="slager-aside">

        <div class="aside-news">

            <?php     
            $args = array(
                'category_name' => 'fotka-dana',
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

                            <div class="natuknica">

                                <p>FOTKA DANA</p>

                            </div>
                            <!-- .natuknica -->

                        </a>
                        <!-- .aside-news-postdiv -->

                        <div class="aside-news-category">
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
                <ins data-revive-zoneid="189" data-revive-id="987aaa8bfddb5a07fc66ba2d45209ef6"></ins>
                <script async src="//www.icvads.com/www/delivery/asyncjs.php"></script>

            </div>
            <!-- .slager-aside-oglas .mt-30 -->

        </div>
        <!-- .sticky -->

    </aside>
    <!-- .slager-aside -->

</article>
<!-- .featured -->
