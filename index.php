<?php include("parts/header.php"); ?>

<div id="primary">
    <main id="main" class="site-main" role="main">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <h1 class="entry-title"><?php the_title(); ?></h1>
                    </header>

                    <div class="entry-content">
                        <div class="section_1">
                            
                        </div>
                        <?php the_content(); ?>
                        <button type="button" class="btn btn-primary">Botón</button>
                    </div>
                </article>

            <?php endwhile;
        else : ?>

            <p><?php _e('No posts found.', 'textdomain'); ?></p>

        <?php endif; ?>

    </main>
</div>

<aside id="sidebar" class="sidebar">
    <?php dynamic_sidebar('sidebar-1'); ?>
</aside>

<?php include("parts/footer.php"); ?>