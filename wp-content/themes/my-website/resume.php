<?php
/*
 * Template name: Resume
 */
get_header();
if (have_posts()):
    while (have_posts()):
        the_post();
        ?>
        <main id="main" class="resume">
            <h2 class="page-title">Resume</h2>
            <section class="skills content">
                <h3>Skills</h3>
                <ul class="skills-groups">
                    <li class="skills-group">
                        <h4>General</h4>
                        <ul>
                            <li>
                                Professionalism
                            </li>
                            <li>
                                Committement
                            </li>
                            <li>
                                Attention to details
                            </li>
                            <li>
                                Effective team player
                            </li>
                            <li>
                                Analytical
                            </li>
                            <li>
                                Communication
                            </li>
                            <li>
                                Managment and leadership
                            </li>
                        </ul>
                    </li>
                    <li class="skills-group">
                        <h4> Technical</h4>
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
                                MongoDB
                            </li>
                            <li>
                                Mocha/Chai
                            </li>
                            <li>
                                Java SE
                            </li>
                            <li>
                                Android
                            </li>
                            <li>
                                MySQL
                            </li>
                            <li>
                                Laravel
                            </li>
                        </ul>
                    </li>
                </ul>
            </section>


            <?php
            $query = new WP_Query(
                    array(
                'post_type' => 'page',
                'pagename' => 'work-and-education'
                    )
            );
            if ($query->have_posts()):
                while ($query->have_posts()):
                    $query->the_post();
                    ?>
                    <section class="timeline content">
                        <h3><?php the_title(); ?></h3>
                        <?php the_content(); ?>
                    </section>
                    <?php
                endwhile;
            endif;
//            wp_reset_postdata();
            ?>



            <section class="interests content">
                <h3>Other interests</h3>
                <ul>
                    <li>
                        <h4>Web surfing</h4>
                        <p>
                            I find this as a nice way to of being up to date with what's out there. It also gives me a good view of the web design that are being used, or the programming techniques developers are using and be up to date with the new technologies.
                        </p>
                    </li>
                    <li>
                        <h4>Reading</h4>
                        <p>
                            Apart from Web surfing and getting information from there. A hardcopy book will give me the advantage of being focused in one thing at a time.
                        </p>
                    </li>
                    <li>
                        <h4>Movies, TV Shows</h4>
                        <p>
                            Movies have been part of my life since I can remember, I always find time to enjoy a good movie or relax with an episode of a TV Show. I used to love fantasy and action, but in the end it's always about the movie production.
                        </p>
                    </li>
                    <li>
                        <h4>Outdors</h4>
                        <p>
                            I was grown to love outdoors as I spent most of my time as a kid just being outside. I spent most of my time inside now but I am always up for a sit on the front yard, an walk in the evening or a weekend on the mountains.
                        </p>
                    </li>
                    <li>
                        <h4>Travelling</h4>
                        <p>
                            When I say travelling I really mean it: from being in the car/train/plane which gives you time to relax, read or listen to an audio book, or even just daydream a bit - up to going and seeing places you've only heard about or those you had no idea existed.
                        </p>
                    </li>
                </ul>
            </section>
        </main>
        <?php
    endwhile;
endif;
get_footer();
?>
