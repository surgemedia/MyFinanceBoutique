<?php
		//$image = (!is_default($vars['background']))?$vars['background']:get_field('default_image','option');

	//debug($vars);

 ?>
<section class="container-fluid paragraph-overlay <?php echo $vars['class']?>" style="background-image: url('<?php echo $vars['image'];?>');">
	<div class="col-md-6 pull-right">
		<div class="box">
		<?php 
		unset($element_file);
		unset($element_vars);
		for ($i=0; $i < sizeof($vars['element']); $i++) { 
			$element_file = $vars['element'][$i]['acf_fc_layout']; //get file
			unset($vars['element'][$i]['acf_fc_layout']); // remove file from array leveling only vars
			$element_vars = $vars['element'][0];
			get_component([
		 		'template' => 'molecule/'.$element_file,
		 		'vars' => $element_vars
				]);

				unset($element_file);
				unset($element_vars);
		}
				unset($i);
		
		 ?>
		</div>
	</div>
</section>