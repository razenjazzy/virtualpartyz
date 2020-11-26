<?php
function bloggrid_load_more_callback() {
	$settings = isset( $_POST['data'] ) ? $_POST['data'] : array();
	ob_start();
	$response = array( 'status' => 'success' );
	if (in_array("0", $settings['select_blog_cat'])) {
		$cat = get_terms('category', array('hide_empty' => false));
	} elseif ( ! empty ( $settings['select_blog_cat'] ) ) {
		$cat = implode(',', $settings['select_blog_cat']);
	}
	$ignore_sticky_posts = ( 'yes' === $settings['ignore_sticky_posts'] ) ? 1 : 0;
	$sticky =  ( 'yes' === $settings['ignore_sticky_posts'] ) ? get_option( 'sticky_posts' ) : NULL;
	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
	$paged = $_POST['data']['paged']; 

	$bg_readmore_button = __DIR__ . '/templates/parts/bg_readmore_button.php';
	$bg_social_sharing  = __DIR__ . '/templates/parts/bg_social_sharing.php';
	$bg_loadmore_button  = __DIR__ . '/templates/parts/bg_loadmore_button.php';

	$posts = new WP_Query(array(
		'post_type' => 'post',
		'category_name' => $cat,
		'post_status' => 'publish',
		'posts_per_page' => $settings['items_per_page'],
		'ignore_sticky_posts' => $ignore_sticky_posts,
		'post__not_in' => $sticky,
		'paged' => $paged
	));

	$next_page = 0;
		if( $posts->max_num_pages > $paged ) {
			$next_page = $paged + 1;
		} else {
			$next_page = 0;
		}
	?>

	<div data-page="<?php echo esc_attr( $paged ); ?>" data-paged="<?php echo esc_attr( $paged ); ?>" data-next-page="<?php echo esc_attr( $next_page ); ?>">
		<?php
		$button_container_attributes_wrap = array (
			'gem-button-container',
			'gem-widget-button',
			'gem-button-position-inline',
		);
		$button_container_attributes = 'class="' . implode(" ", $button_container_attributes_wrap) . '"';

		$readmore_button_wrap = array (
			'gem-button',
			'gem-button-size-'. $_POST['data']['readmore_button_size'],
			'gem-button-style-'. $_POST['data']['readmore_button_type'],
		);
		$readmore_button = 'class="' . implode(" ", $readmore_button_wrap) . '"';

		$readmore_button_text = $_POST['data']['readmore_button_text'];

		$preset_path = __DIR__ . '/templates/output-blog-grid.php';
		$preset_path_filtered = apply_filters( 'thegem_blog_grid_item_preset', $preset_path);
		$preset_path_theme = get_stylesheet_directory() . '/templates/blog-grid/output-blog-grid.php';

		if ($posts -> have_posts()) :  while ($posts -> have_posts()) : $posts -> the_post();
			if (!empty($preset_path_theme) && file_exists($preset_path_theme)) {
				include($preset_path_theme);
			} else if (!empty($preset_path_filtered) && file_exists($preset_path_filtered)) {
				include($preset_path_filtered);
			}
		endwhile;
		endif;
		?>
	</div>

	<?php
	$response['html'] = trim( preg_replace( '/\s\s+/', ' ', ob_get_clean() ) );
	$response = json_encode( $response );
	header('Content-Type: application/json');
	echo $response;
	die;
}
add_action( 'wp_ajax_thegem_bloggrid_load_more', 'bloggrid_load_more_callback' );
add_action( 'wp_ajax_nopriv_thegem_bloggrid_load_more', 'bloggrid_load_more_callback' );