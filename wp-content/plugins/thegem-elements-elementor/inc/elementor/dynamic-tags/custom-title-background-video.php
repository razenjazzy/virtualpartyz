<?php
namespace TheGem_Elementor\DynamicTags;


use Elementor\Core\DynamicTags\Tag;
use Elementor\Modules\DynamicTags\Module as TagsModule;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class Custom_Title_Background_Video extends Tag {
	public function get_name() {
		return 'thegem-custom-title-background-video';
	}

	public function get_title() {
		return __( 'Background Video (set in Page Options)', 'thegem');
	}

	public function get_group() {
		return 'thegem-title';
	}

	public function get_categories() {
		return [ TagsModule::TEXT_CATEGORY ];
	}

	public function render() {
		global $thegem_page_title_template_data;
		$page_data = thegem_get_sanitize_page_title_data(0, $thegem_page_title_template_data);
		$link = 'https://www.youtube.com/watch?v=XHOmBV4js_E';
		if($page_data['title_video_background'] && $thegem_page_title_template_data['title_use_page_settings']) {
			$video_type = $page_data['title_video_type'];
			$video = $page_data['title_video_background'];
			if($video_type == 'youtube' || $video_type == 'vimeo') {
				if($video_type == 'youtube') {
					$link = 'https://www.youtube.com/embed/'.$video;
				}
				if($video_type == 'vimeo') {
					$link = 'https://player.vimeo.com/video/'.$video;
				}
			} else {
				$link = esc_url($video);
			}
		}
		echo $link;
	}
}
