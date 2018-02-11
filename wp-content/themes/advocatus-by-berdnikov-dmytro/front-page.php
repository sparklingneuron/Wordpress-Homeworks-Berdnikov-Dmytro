<?php
get_header(); ?>

    <section id="about-us" class="about-us">
        <div class="container">
            <header class="section-header">
                <h2><?php echo get_theme_mod('about_us_section_title'); ?></h2>
                <p><?php echo get_theme_mod('about_us_section_description'); ?></p>
            </header>
            <section class="history">
                <h3><?php echo get_theme_mod('about_us_left_subsection_title'); ?></h3>
                <dl>
                    <?php
                    $args = array(
                        'post_type' => 'history_record',
                        'order' => 'ASC',
                        'posts_per_page' => 3
                    );

                    $history = new WP_Query($args);

                    if ($history->have_posts()) :
                        while ($history->have_posts()) :
                            $history->the_post();
                            get_template_part('template-parts/content', 'history_record');
                        endwhile;
                    else :
                        echo "no posts available";
                    endif;

                    wp_reset_postdata();
                    ?>
                </dl>
            </section>
            <section class="expertise">
                <h3><?php echo get_theme_mod('about_us_right_subsection_title'); ?></h3>
                <p><?php echo get_theme_mod('about_us_right_subsection_content'); ?></p>
            </section>
        </div>
    </section>
    <section id="practis-area" class="practis-area">
        <div class="container">
            <header class="section-header">
                <h2><?php echo get_theme_mod('practice_area_section_title'); ?></h2>
                <p><?php echo get_theme_mod('practice_area_section_description'); ?></p>
            </header>
            <ul class="services">
                <?php
                $args = array(
                    'post_type' => 'practice_area',
                    'order' => 'ASC',
                    'posts_per_page' => 4
                );

                $practiceAreas = new WP_Query($args);

                if ($practiceAreas->have_posts()) :
                    while ($practiceAreas->have_posts()) :
                        $practiceAreas->the_post();
                        get_template_part('template-parts/content', 'practice_area');
                    endwhile;
                else :
                    echo "no posts available";
                endif;

                wp_reset_postdata();
                ?>
            </ul>
        </div>
    </section>
    <section id="meet-our-attorney" class="meet-our-attorney">
        <div class="container">
            <header class="section-header">
                <h2><?php echo get_theme_mod('meet_our_attorney_section_title'); ?></h2>
                <p><?php echo get_theme_mod('meet_our_attorney_section_description'); ?></p>
            </header>
            <ul class="attorney-list">
                <?php
                $args = array(
                    'post_type' => 'member',
                    'order' => 'ASC'
                );

                $members = new WP_Query($args);

                if ($members->have_posts()) :
                    while ($members->have_posts()) :
                        $members->the_post();
                        get_template_part('template-parts/content', 'member');
                    endwhile;
                else :
                    echo "no posts available";
                endif;

                wp_reset_postdata();
                ?>
            </ul>
        </div>
    </section>
    <section id="our-clients-say" class="our-clients-say">
        <div class="container">
            <header class="section-header">
                <h2><?php echo get_theme_mod('our_clients_say_section_title'); ?></h2>
                <p><?php echo get_theme_mod('our_clients_say_section_description'); ?></p>
            </header>
            <?php
            $args = array(
                'post_type' => 'clients_quote',
                'order' => 'ASC'
            );

            $clientsQuotes = new WP_Query($args);

            if ($clientsQuotes->have_posts()) :
                while ($clientsQuotes->have_posts()) :
                    $clientsQuotes->the_post();
                    get_template_part('template-parts/content', 'clients_quote');
                endwhile;
            else :
                echo "no posts available";
            endif;

            wp_reset_postdata();
            ?>
            <ul class="slider">
                <li><a href="#">slide-1</a></li>
                <li><a href="#">slide-2</a></li>
                <li><a href="#">slide-3</a></li>
            </ul>
        </div>
    </section>
    <section id="recent-publications" class="recent-publications">
        <div class="container">
            <header class="section-header">
                <h2><?php echo get_theme_mod('recent_publications_section_title'); ?></h2>
                <p><?php echo get_theme_mod('recent_publications_section_description'); ?></p>
            </header>
            <ul class="publications-list">
                <?php
                $args = array(
                    'post_type' => 'post',
                    'order' => 'DESC',
                    'posts_per_page' => 3
                );

                $articles = new WP_Query($args);

                if ($articles->have_posts()) :
                    while ($articles->have_posts()) :
                        $articles->the_post(); ?>
                            <li>
                                <?php get_template_part('template-parts/content', ''); ?>
                            </li>
                    <?php
                    endwhile;
                else :
                    echo "no posts available";
                endif;

                wp_reset_postdata();
                ?>
            </ul>
        </div>
    </section>
    <section id="faq" class="faq">
        <div class="container">
            <header class="section-header">
                <h2><?php echo get_theme_mod('faq_section_title'); ?></h2>
                <p><?php echo get_theme_mod('faq_section_description'); ?></p>
            </header>
            <ul class="faq-list">
                <?php
                $args = array(
                    'post_type' => 'faq',
                    'order' => 'ASC',
                    'posts_per_page' => 6
                );

                $faq = new WP_Query($args);

                if ($faq->have_posts()) :
                    while ($faq->have_posts()) :
                        $faq->the_post(); ?>
                        <li>
                            <?php get_template_part('template-parts/content', 'faq'); ?>
                        </li>
                    <?php
                    endwhile;
                else :
                    echo "no posts available";
                endif;

                wp_reset_postdata();
                ?>
            </ul>
            <div class="right-area">
                <p>Long established fact that a reader will be distracted by the readable content of a page
                    when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                    distribution
                    of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
            </div>
        </div>
    </section>
    <section id="contact" class="contact">
        <div class="container">
            <header class="section-header">
                <h2><?php echo get_theme_mod('contact_section_title'); ?></h2>
                <p><?php echo get_theme_mod('contact_section_description'); ?></p>
            </header>
            <form class="contact-form" action="#">
                <ul>
                    <li>
                        <input type="text" name="clients-name" placeholder="Enter your name...">
                    </li>
                    <li>
                        <input type="text" name="clients-email" placeholder="Enter your email...">
                    </li>
                    <li>
                        <input type="text" name="clients-tel" placeholder="Enter your phone...">
                    </li>
                    <li>
                    <textarea name="clients-message" id="clients-message" cols="30"
                              rows="4" placeholder="Enter your message..."></textarea>
                    </li>
                    <li>
                        <input type="submit" name="submit-button" value="<?php echo get_theme_mod('contact_button_text'); ?>">
                    </li>
                </ul>
                <div class="outer-div">
                    <div class="inner-div">
                        <img src="<?php echo get_theme_mod('contact_section_map_image'); ?>" alt="Company address">
                    </div>
                </div>
            </form>
        </div>
    </section>
<?php
//get_sidebar();
get_footer();