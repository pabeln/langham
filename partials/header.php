<header class="header">
	<div class="head">
		<div class="header-container container">
			<div class="title"><a href="/">LANGHAM PLACE</a></div>
			<div class="subtitle">DOWNTOWN DUBAI</div>
		</div>
	</div>
	<div class="nav">
		<div class="header-container container">
		<?php wp_nav_menu( array(
			'theme_location' => 'header',
			'container' => 'nav',
			'container_class' => 'mainMenu-menu',
			'menu' => 'Main Nav',
			'menu_class' => 'mainMenu-list',
			'link_after' => '<span class="my-span">|</span>'
		)); ?>
		</div>
	</div>
	<div class="mobile-nav-icon"></div>
	<div class="mobile-nav"> <!-- visible-xs-block -->
		<?php wp_nav_menu( array(
			'theme_location' => 'header',
			'container' => 'nav',
			'container_class' => 'mobileMenu-menu',
			'menu' => 'Main Nav',
			'menu_class' => 'mobileMenu-list'
		)); ?>
	</div>
</header>