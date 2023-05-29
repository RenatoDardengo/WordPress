<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
get_header();
?>

<!-- Portfolio Section-->
<section class="page-section portfolio" id="portfolio">
    <div class="container" style="margin-top:20px">
        
        <?php
            $args = array('posts_per_page' => 30, 'post_type' => 'post');
            $the_query_post = new WP_Query($args);
            if ($the_query_post->have_posts()) {?>
                <table class="table table-hover">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Imagem</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Conteúdo</th>
                        </tr>
                    </thead>
                    <tbody>
               
            <?php
               while ($the_query_post->have_posts()) {
                  $the_query_post->the_post();
            ?>
                    <tr>
                        <th scope="row"><?php the_id(); ?></th>
                        <td><?php the_post_thumbnail('thumbnail', array('style' => 'width:50%; height:auto')); ?></td>
                        <td><?php the_title(); ?></td>
                        <td><?php the_content(); ?></td>
                    </tr>
              <?php
                    
                }
                ?>
            </tbody>
            </table>
            <?php
            }
            ?>
            

        


    </div>

</section>



    
<?php get_footer();
