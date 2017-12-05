<?php
/**
 * Template Tags.
 *
 * @since 1.0.0
 * @package WP Todo
 */

/**
 * Load the main window.
 *
 * Called in admin_footer and wp_footer.
 *
 * Wraps all wp-todo elements in a .wp-todo wrapper.
 *
 * @author Aubrey Portwood
 * @since  1.0.0
 */
function wpt_container() {
	// @todo Will want to move this markup out into JS template partials.
	?>
	<div id="wp-todo" class="<?php wpt_admin_class(); ?>">
		<section id="wp-todo-container" class="wp-todo-container">
			<header id="wp-todo-header" class="wp-todo-header">
				<h3>WP Todo</h3>
			</header>
			<nav id="wp-todo-navbar" class="wp-todo-navbar">
				<ul class="wp-todo-menu">
					<li class="wp-todo-menu-item"><div id="list-select"></div></li>
					<li class="wp-todo-menu-item"><button id="add-list">+ List</button></li>
					<li class="wp-todo-menu-item"><button id="configure-link">Configure</button></li>
				</ul>
			</nav>
			<div id="wp-todo-content-container" class="wp-todo-content">
				<div class="wp-todo-loader-container">
					<div class="wp-todo-loader"></div>
				</div>
				<div id="wp-todo-list-container"></div>
				<div id="new-list" class="panel panel-hidden">
					<form id="add-list-form">
						<div class="form-row">
							<label for="add-list">Add List</label>
							<input type="text" name="list" id="add-list">
						</div>
					</form>
				</div>
				<div id="message-container"></div>
			</div>
			<footer id="wp-todo-footer" class="wp-todo-footer"></footer>
		</section>
	</div>
	<?php
}

/**
 * Add an admin class if it's the admin.
 *
 * @author Aubrey Portwood
 * @since  1.0.0
 */
function wpt_admin_class() {
	if ( is_admin() ) {
		echo 'admin';
	}
}
