<?php
get_header();

if (have_posts()):
    while (have_posts()):
        the_post();
        ?>
        <main id="main" class="resume">

            <h2 class="page-title"><?php the_title(); ?></h2>
            <section class="skills content">
                <?php
                the_content();
                ?>
            </section>

        </main>
        <?php
    endwhile;
endif;

get_footer();
?>

