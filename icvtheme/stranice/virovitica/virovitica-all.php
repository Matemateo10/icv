<article class="featured">

    <div class="slagerx4-all">
        <?php
        $posts_per_page = 12; // Number of posts per page

        // Get the current page number
        if (get_query_var('paged')) {
            $paged = get_query_var('paged');
        } else {
            $paged = 1;
        }

        $exclude_category = get_category_by_slug('istaknuto-virovitica')->term_id;

        $args = array(
            'category_name' => 'virovitica',
            'posts_per_page' => $posts_per_page,
            'paged' => $paged,
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

            while ($query->have_posts()) {
                $query->the_post();

                // Get the post permalink
                $post_permalink = get_permalink();

                // Trim post title
                $title = get_the_title();     

                // Display your post content here
                ?>
                <div class="slagerx4-main-all">
                    <a class="slagerx4-postdiv-all" href="<?php echo $post_permalink; ?>">
                        <?php if (has_post_thumbnail()) {
                            the_post_thumbnail('post-thumbnail', array('class' => 'slagerx4-post-pic-all'));
                        }?>
                    </a>

                    <div class="slagerx4-category-all">
                        <?php
                        $file_path = ABSPATH . 'wp-content/themes/icvtheme/pomocne/kategorije.php';
                        if (file_exists($file_path)) {
                            include($file_path);
                        }
                        ?>
                    </div>

                    <a class="slagerx4-post-title-all" href="<?php echo $post_permalink; ?>">
                        <h1><?php echo $title; ?></h1>
                    </a>
                </div>
                <?php
                $count++; // Increment the counter
            }

            // Pagination
            $big = 999999999; // Set a large value for the 'total' parameter
            echo '<div class="pagination">';
            echo paginate_links(array(
                'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                'format' => '?paged=%#%',
                'current' => max(1, $paged),
                'total' => $query->max_num_pages,
                'prev_text' => '&laquo;',
                'next_text' => '&raquo;',
            ));
            echo '</div>';
            ?>

            <!-- Navigacija po stranicama -->
            <div class="navigacija-stranica">

                <form action="" method="get">

                    <label for="broj-stranice">Pretraži po broju stranice:</label>
                    <input type="number" id="broj-stranice" name="paged" min="1" max="<?php echo $query->max_num_pages; ?>" value="<?php echo $paged; ?>">
                    <input type="submit" value="Idi">

                </form>

            </div>

            <?php
            wp_reset_postdata();
        } else {
            // If no posts are found
            echo 'No posts found.';
        }
        ?>
    </div>
    <!-- .slagerx4-all -->

</article>
<!-- .featured -->
    
