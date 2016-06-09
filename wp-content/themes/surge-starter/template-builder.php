<?php
/**
* Template Name: Page Builder
*/
?>
<?php
$page_heading = get_field('layout');
debug($page_heading);

$layout_builder = get_field('layout');
debug($layout_builder);
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