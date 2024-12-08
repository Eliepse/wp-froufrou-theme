<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="<?= esc_url(get_stylesheet_uri()); ?>" type="text/css"/>
	<?php wp_head(); ?>
</head>
<body>

<div class="mainContainer">
    <header class="header">
		<?php if (has_custom_logo()): ?>
            <a href="<?= home_url() ?>" class="header__logoWrapper">
                <img class="header__logo"
                     src="<?= wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'full')[0] ?>"
                     alt="Logo <?php bloginfo('name') ?>"
                     height="120"
                />
            </a>
		<?php endif ?>

        <div class="header__content">
            <a href="<?= home_url() ?>">
				<?php if (is_front_page()): ?>
                    <h1 class="header__title"><?php bloginfo('name'); ?></h1>
				<?php else: ?>
                    <div class="header__title"><?php bloginfo('name'); ?></div>
				<?php endif; ?>
            </a>

			<?php wp_nav_menu(["theme-location" => "main-menu"]) ?>
        </div>
    </header>

    <main class="pageContent">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>

				<?php if (false === is_front_page()): ?>
                    <h1 class="page__title"><?= the_title() ?></h1>
				<?php endif; ?>

				<?php the_content(); ?>

			<?php endwhile; ?>
		<?php else: ?>
            <p>Please configure a page</p>
		<?php endif; ?>
    </main>
</div>


<?php wp_footer(); ?>
</body>
</html>