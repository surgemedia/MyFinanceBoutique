<?php
get_component([
						'template' => 'molecule/jumbotron',
						'vars' => [
							'id' => get_field('id'),
							'slides' => get_field('slides'),
							'image' => get_field('image'),

						]
			]);

$layout_builder = get_field('layout');
foreach ($layout_builder as $key => $value) {
	$section_file = $value['acf_fc_layout'];
	unset($value['acf_fc_layout']); //of section

			get_component([
						'template' => 'organism/'.$section_file,
						'vars' => $value
			]);
	unset($section_file);
}
unset($page_heading);
unset($layout_builder);
?>