<div class="grid1 main">
	<div class="">
		<header>
			<div class="grid2">
				<div class="nombre slogan">
					<?php if ($site_name): ?>
						<h1><?php print $site_name; ?></h1>
					<?php endif; ?>
					<?php if ($site_slogan): ?>
						<h2><?php print $site_slogan; ?></h2>
					<?php endif; ?>
				</div>

				<div class="busqueda"><?php print render($page['search']); ?></div>
				<div class="Logo"></div>
			</div>
		</header>
		<div>
			<?php if ($main_menu): ?>
			<nav id="main-menu" role="navigation" tabindex="-1">
				<?php
				// This code snippet is hard to modify. We recommend turning off the
				// "Main menu" on your sub-theme's settings form, deleting this PHP
				// code block, and, instead, using the "Menu block" module.
				// @see https://drupal.org/project/menu_block
				print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('class' => array('links', 'inline', 'clearfix'), ), 'heading' => array('text' => t('Main menu'), 'level' => 'h2', 'class' => array('element-invisible'), ), ));
				?>
			</nav>
		<?php endif; ?>

		</div>
	</div>
	<?php print render($page['banner']); ?>
	<?php if ($page['banner']):?>
		<div class="banner">
			
		


		</div>
	<?php endif;?>

	<div class="content">
		<div id="content" class="column" role="main" >
		    <?php print render($page['highlighted']); ?>
		    <?php print $breadcrumb; ?>
		    <a id="main-content"></a>
		    <?php print render($title_prefix); ?>
		    <?php if ($title): ?>
		    <h1 class="page__title title" id="page-title"><?php print $title; ?></h1>
			<?php endif; ?>
			<?php print render($title_suffix); ?>
			<?php print $messages; ?>
			<?php print render($tabs); ?>
			<?php print render($page['help']); ?>
			<?php if ($action_links): ?>
			  <ul class="action-links"><?php print render($action_links); ?></ul>
			<?php endif; ?>
			<?php print render($page['content']); ?>
			<?php print $feed_icons; ?>
		</div>
	</div>
</div>