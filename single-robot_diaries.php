<?php get_header(); ?>

<div class="toborlife-news-blog">
    <div class="toborlife-news-container">
    <div class="toborlife-news-content">
            <?php 
            if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="toborlife-news-post">
                        <div class="toborlife-news-post-image">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('large'); ?>
                            </a>
                        </div>
                        <div class="toborlife-news-post-details">
                            <h2 class="toborlife-news-post-title">
                                <?php the_title(); ?>
                            </h2>
                            <div class="toborlife-news-post-meta">
                                <div class="toborlife-author-profile">
                                    <?php echo get_avatar( get_the_author_meta('ID'), 50 ); // 50 is the size of the avatar ?>
                                </div>
                                
                                <div class="toborlife-author-details">
                                    <span class="toborlife-author-name">
                                        <?php the_author_posts_link(); ?>
                                    </span>
                                    <span class="toborlife-post-date">
                                        <?php echo get_the_date('F j, Y'); ?>
                                    </span>
                                </div>
                            </div>

                            <div class="toborlife-news-post-excerpt">
                                <?php the_content(); ?>
                            </div>
                            <div class="blog-sharing-and-tags">
                                <?php get_template_part( 'template-parts/social', 'sharing-single' ); ?>
                                <?php the_tags(  '<div class="tags-progression"><span>' .  esc_html__( 'Tags:', 'onzo-progression' ) . '</span>', ' ', '</div>' ); ?> 
                            </div>
                        </div>
                        
                    </div>
                <?php endwhile; ?>

            <?php else : ?>
                <p>No content found.</p>
            <?php endif; ?>
            <div class="toborlife-news-comments-section">
                <?php
                
                if (comments_open() || get_comments_number()) {
                    comments_template(); 
                } else {
                    echo '<p>' . esc_html__('Comments are closed for this post.', 'onzo') . '</p>';
                }
                ?>
            </div>

        </div>


        <aside class="toborlife-news-sidebar">
            <!-- Search -->
            <section class="toborlife-news-sidebar-section">
                <h3 class="toborlife-news-sidebar-title">Search</h3>
                <form method="get" action="<?php echo esc_url(home_url('/')); ?>" class="toborlife-news-search-form">
                    <div class="toborlife-news-search-wrapper">
                        <input type="search" name="s" class="toborlife-news-search-input" placeholder="Enter keyword to search..." />
                        <span class="toborlife-news-search-icon"></span>
                    </div>
                </form>

            </section>

            <!-- Recent News -->
            <section class="toborlife-news-sidebar-section">
                <h3 class="toborlife-news-sidebar-title">Recent News</h3>
                <ul class="toborlife-news-recent-list">
                    <?php
                    
                    $recent_posts = get_posts([
                        'post_type'      => 'robot_diaries', 
                        'posts_per_page' => 5,              
                        'post_status'    => 'publish',      
                    ]);

                    foreach ($recent_posts as $post) : setup_postdata($post); ?>
                        <li class="toborlife-news-recent-item">
                            <a href="<?php echo get_permalink($post->ID); ?>" class="toborlife-news-recent-link">
                                <div class="toborlife-news-recent-single">
                                    <div class="toborlife-news-recent-single-icon">
                                        <span class="toborlife-news-post-icon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/recent-news-title-icon.png" alt="Post Icon">
                                        </span> 
                                    </div>
                                    <div class="toborlife-news-recent-single-title-date">
                                        <h6 class="toborlife-news-recent-title"><?php echo $post->post_title; ?></h6>
                                        <span class="toborlife-news-post-date"><?php echo get_the_date('F j, Y', $post->ID); ?></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                    <?php endforeach; wp_reset_postdata(); ?>
                </ul>
            </section>


          
            <section class="toborlife-news-sidebar-section">
                <h3 class="toborlife-news-sidebar-title">Archive</h3>
                <ul class="toborlife-news-archive-list">
                    <?php
                    global $wpdb;
                    $archives = $wpdb->get_results("
                        SELECT DISTINCT YEAR(post_date) AS year, MONTH(post_date) AS month, COUNT(ID) AS post_count
                        FROM {$wpdb->posts}
                        WHERE post_status = 'publish' AND post_type = 'robot_diaries'
                        GROUP BY year, month
                        ORDER BY post_date DESC
                    ");

                    foreach ($archives as $archive) :
                        $archive_url = esc_url(get_month_link($archive->year, $archive->month));
                        ?>
                        <li class="toborlife-news-archive-item">
                            <span class="toborlife-news-archive-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/arrow-right.png" alt="Icon">
                            </span>
                            <a href="<?php echo $archive_url; ?>" class="toborlife-news-archive-link">
                                <?php echo date_i18n('F Y', mktime(0, 0, 0, $archive->month, 1, $archive->year)); ?>
                            </a>
                            <span class="toborlife-news-archive-count">
                                <?php echo $archive->post_count; ?>
                            </span>
                        </li>
                    <?php endforeach; ?>
                </ul>

            </section>
        </aside>
    </div>
</div>


<?php get_footer(); ?>