<?php
/**
 * Template Name: Home page - Naslovnica - old
 *
 * Displays Home page.
 *
 * @package ICV
 * @since ICV 1.0
 */

?>
<?php get_header(); ?>

    <?php 

        // Get the current page URL
        $current_url = $_SERVER['REQUEST_URI'];

        // Check if the URL mathces a certain pattern
        if ($current_url === '/'){

            // Include the corresponding file
            include('stranice/naslovnica/naslovnica.php');

        } elseif (strpos($current_url, '/vijesti/aktualno/') !== false){

            // Include the corrensponding file
            include('stranice/vijesti/aktualno-all.php');

        } elseif (strpos($current_url, '/vijesti/crna-kronika/') !== false){

            // Include the corrensponding file
            include('stranice/vijesti/crna-kronika-all.php');

        } elseif (strpos($current_url, '/hrvatska/') !== false){

            // Include the corrensponding file
            include('stranice/vijesti/hrvatska-all.php');

        } elseif (strpos($current_url, '/vijesti/zanimljivosti/') !== false){

            // Include the corrensponding file
            include('stranice/vijesti/zanimljivosti-all.php');

        } elseif (strpos($current_url, '/vijesti/vjerski-zivot/') !== false){

            // Include the corrensponding file
            include('stranice/vijesti/vjerski-zivot-all.php');

        } elseif (strpos($current_url, '/vijesti/fotka-dana/') !== false){

            // Include the corrensponding file
            include('stranice/vijesti/fotka-dana-all.php');

        } elseif (strpos($current_url, '/vijesti/') !== false){

            // Include the corrensponding file
            include('stranice/vijesti/vijesti-main.php');

        } elseif (strpos($current_url, '/virovitica/') !== false){
            
            // Include the corrensponding file
            include('stranice/virovitica/virovitica-main.php');

        } elseif (strpos($current_url, '/zupanije/viroviticko-podravska-zupanija/') !== false){
            
            // Include the corrensponding file
            include('stranice/zupanije/vpz-all.php');

        } elseif (strpos($current_url, '/zupanije/koprivnicko-krizevacka-zupanija/') !== false){
            
            // Include the corrensponding file
            include('stranice/zupanije/kkz-all.php');

        } elseif (strpos($current_url, '/zupanije/osjecko-baranjska-zupanija/') !== false){
            
            // Include the corrensponding file
            include('stranice/zupanije/kkz-all.php');

        }  elseif (strpos($current_url, '/zupanije/') !== false){
            
            // Include the corrensponding file
            include('stranice/zupanije/zupanije-main.php');

        }     
        
        else{}

    ?>

<?php get_footer(); ?>