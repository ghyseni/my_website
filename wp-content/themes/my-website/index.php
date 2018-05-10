<?php get_header(); ?>
<main id="main" class="about">

    <article class="content">
        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();
                ?>
                <h2> <?php the_title(); ?> </h2>
                <?php
                the_content();
            endwhile; // end while
        endif; // end if
        ?>

    </article>
    <section class="skills content">
        <h3>Skills</h3>
        <ul>
            <li>
                HTML5
            </li>
            <li>
                CSS3
            </li>
            <li>
                JS/Jquery
            </li>
            <li>
                PHP
            </li>
            <li>
                Wordpress
            </li>
            <li>
                NodeJS
            </li>
            <li>
                Java
            </li>
        </ul>
        <span class="bg-image">
        </span>
    </section>

</main>
<?php get_footer(); ?>
