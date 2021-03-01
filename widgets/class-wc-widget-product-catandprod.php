<?php
/**
 * Menu Sidebar Widget
 *
 * @package WooCommerce\Widgets
 * @version 2.3.0
 */

class wpschool_example_widget extends WP_Widget {
	public function __construct() {
		$widget_options = array(
			'classname' => 'wpschool_widget',
			'description' => 'Menu in sidebar',
		);
		parent::__construct( 'wpschool_widget', 'Menu Sidebar', $widget_options );
	}
	public function widget( $args, $instance ) {
		$title = apply_filters( 'widget_title', $instance[ 'title' ] );
		$html = '';
		$menu_items = wp_get_nav_menu_items('MENU VERTICAL');
		$levels = array();
		$all = array();
		$url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
		foreach ($menu_items as $key => $value) {
			
			$levels[$value->menu_item_parent][] = $value->ID;
			$all[$value->ID] = array(
				'name'=>$value->title,
				'url' =>$value->url,
				'active'=>$url==$value->url,
			);
		}	
		


		$html .= '<div class="sidebar-menu sidebar-menu-original">';
		$html .= '<div class="sidebar-menu-inner">';
		$html .= '<div class="title">Services menu</div>';
		$html .= '<ul>';
		foreach ($levels[0] as $key => $ID):
			$html .= '<li class="item level-0'.($all[$ID]['active']?' active':'').'"><a href="'.$all[$ID]['url'].'">'.$all[$ID]['name'].'</a>';
			if(count($levels[$ID])):
				$html .= '<ul class="footer-links">';
					foreach ($levels[$ID] as $key => $id):
						$html .= '<li class="item item-1'.($all[$id]['active']?' active':'').'"><a href="'.$all[$id]['url'].'">'.$all[$id]['name'].'</a></li>';
					endforeach;
					$html .= '</ul>';
			endif;
			$html .= '</li>';
		endforeach;
		$html .= '</ul>';
		$html .= '</div>';
		$html .= '</div>';
		echo $html;
	}		
}

function wpschool_register_widget() {
	register_widget( 'wpschool_example_widget' );
}
add_action( 'widgets_init', 'wpschool_register_widget' );	