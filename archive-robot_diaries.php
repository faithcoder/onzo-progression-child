<?php
/**
 * Template Name: ToborLife Robot diaries
 * Description: ToborLife AI blog page template with a sidebar.
 */
get_header();

?>

<div class="toborlife-news-blog">
    <div class="toborlife-news-container">
    <div class="toborlife-news-content">
            <?php 
            $blog_query = new WP_Query([
                'post_type'      => 'robot_diaries',
                'posts_per_page' => 3, 
                'paged'          => get_query_var('paged') ? get_query_var('paged') : 1,
            ]);

            if ($blog_query->have_posts()) : ?>
                <?php while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
                    <div class="toborlife-news-post">
                        <div class="toborlife-news-post-image">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('large'); ?>
                            </a>
                        </div>
                        <div class="toborlife-news-post-details">
                            <h2 class="toborlife-news-post-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                            <div class="toborlife-news-post-meta">
                                <span>BY <?php the_author(); ?></span> /
                                <span><?php echo get_the_date('F j, Y'); ?></span> /
                                <span><?php the_category(', '); ?></span> /
                                <span><?php comments_number('No Comments', '1 Comment', '% Comments'); ?></span>
                            </div>
                            <div class="toborlife-news-post-excerpt">
                                <?php the_excerpt(); ?>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="toborlife-news-read-more">
                                Read More
                            </a>
                        </div>
                    </div>
                <?php endwhile; ?>
                
                <!-- Pagination Section -->
                <div class="toborlife-news-pagination">
                    <?php
                    echo paginate_links([
                        'base'      => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
                        'format'    => '?paged=%#%',
                        'current'   => max(1, get_query_var('paged')),
                        'total'     => $blog_query->max_num_pages, 
                        'prev_text' => '&laquo;', 
                        'next_text' => 'Next',    
                        'type'      => 'list',    
                    ]);
                    ?>
                </div>

            <?php else : ?>
                <p>No posts found.</p>
            <?php endif; ?>

            <?php
            
            wp_reset_postdata();
            ?>
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
                    $recent_posts = wp_get_recent_posts([
                        'post_type'   => 'robot_diaries',
                        'numberposts' => 5,
                        'post_status' => 'publish',
                    ]);
                    foreach ($recent_posts as $post) : ?>
                        <li class="toborlife-news-recent-item">
                            <a href="<?php echo get_permalink($post['ID']); ?>" class="toborlife-news-recent-link">
                                <div class="toborlife-news-recent-single">
                                    <div class="toborlife-news-recent-single-icon">
                                        <span class="toborlife-news-post-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/recent-news-title-icon.png" alt="Post Icon"></span> 
                                    </div>
                                    <div class="toborlife-news-recent-single-title-date">
                                        <h6 class="toborlife-news-recent-title"><?php echo $post['post_title']; ?></h6>
                                        <span class="toborlife-news-post-date"><?php echo date('F j, Y', strtotime($post['post_date'])); ?></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                    <?php endforeach; wp_reset_query(); ?>
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
